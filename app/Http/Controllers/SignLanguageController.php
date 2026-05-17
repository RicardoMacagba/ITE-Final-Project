<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SignLanguageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'mlServiceUrl' => config('services.ml.url'),
        ]);
    }

    public function predict(Request $request)
    {
        $request->validate([
            'image' => 'required|file|image|mimes:jpg,jpeg,png,webp|max:5120',
        ], [
            'image.required' => 'Please choose an image to upload.',
            'image.image' => 'The file must be a valid image (JPG, PNG, or WebP).',
            'image.max' => 'The image must be smaller than 5 MB.',
        ]);

        $image = $request->file('image');
        $mlUrl = rtrim(config('services.ml.url'), '/').'/predict';

        try {
            $response = Http::timeout(config('services.ml.timeout', 60))
                ->attach(
                    'file',
                    file_get_contents($image->getRealPath()),
                    $image->getClientOriginalName(),
                    ['Content-Type' => $image->getMimeType() ?: 'application/octet-stream']
                )
                ->post($mlUrl);
        } catch (ConnectionException) {
            return back()
                ->withInput()
                ->with('error', 'Cannot reach the ML service at '.config('services.ml.url').'. Start it from edp_python (see start-ml-server.ps1) and use a different port than Laravel.');
        }

        if (! $response->successful()) {
            $detail = $response->json('detail') ?? $response->body();
            $message = is_string($detail) ? $detail : 'Prediction failed (HTTP '.$response->status().').';

            return back()->withInput()->with('error', $message);
        }

        $result = $response->json();

        if (! is_array($result) || ! array_key_exists('predicted_class', $result)) {
            return back()->withInput()->with(
                'error',
                'Invalid response from ML service. Make sure '.config('services.ml.url').' is the Python API (uvicorn), not the Laravel site.'
            );
        }

        $label = $result['predicted_letter'] ?? $result['predicted_class'];

        return back()->with([
            'prediction' => $label,
            'confidence' => round(($result['confidence'] ?? 0) * 100, 2),
            'uploaded_image' => $image->store('uploads', 'public'),
        ]);
    }
}
