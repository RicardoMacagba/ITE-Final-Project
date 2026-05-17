<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SignVision AI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #050816;
            color: #e9d5ff;
            min-height: 100vh;
            margin: 0;
        }
        .hero-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 128px);
            padding: 4rem 1.5rem 2rem;
        }
        .hero-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 4rem;
            max-width: 1120px;
            margin: 0 auto;
            width: 100%;
        }
        .hero-left,
        .hero-right {
            flex: 1 1 380px;
            min-width: 300px;
        }
        .hero-left {
            text-align: center;
            max-width: 680px;
        }
        .hero-right {
            display: flex;
            justify-content: center;
        }
        .section-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 40px;
            padding: 2rem;
        }
        .text-center {
            text-align: center;
        }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            border-radius: 24px;
            background: linear-gradient(90deg, #8b5cf6, #3b82f6);
            color: #fff;
            font-weight: 700;
            text-decoration: none;
        }
        .bg-gradient-fallback {
            background: linear-gradient(135deg, rgba(139,92,246,0.25), rgba(59,130,246,0.25));
        }
        .glass-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(24px);
        }
        .features-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
        }
        .feature-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 30px;
            padding: 2rem;
            min-width: 280px;
            flex: 1 1 300px;
            max-width: 360px;
        }
        .predict-section {
            padding: 4rem 1.5rem;
        }
        .predict-panel {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 40px;
            padding: 2rem;
            max-width: 900px;
            margin: 0 auto;
        }
        .center-content {
            text-align: center;
        }
    </style>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');

            preview.src = URL.createObjectURL(event.target.files[0]);

            preview.classList.remove('hidden');

            document.getElementById('uploadText').classList.add('hidden');
        }
    </script>
</head>

<body class="bg-[#050816] text-white overflow-x-hidden">

    <!-- BACKGROUND EFFECTS -->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-purple-600 opacity-20 blur-[120px] rounded-full"></div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-blue-600 opacity-20 blur-[120px] rounded-full"></div>

    </div>

    <!-- NAVBAR -->
    <nav class="w-full fixed top-0 z-50 backdrop-blur-xl bg-white/5 border-b border-white/10">

        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <h1 class="text-2xl font-extrabold tracking-wide">
                <span class="text-purple-400">Sign</span>Vision AI
            </h1>

            <div class="hidden md:flex items-center gap-8 text-gray-300">

                <a href="#" class="hover:text-purple-400 transition">Home</a>

                <a href="#features" class="hover:text-purple-400 transition">Features</a>

                <a href="#predict" class="hover:text-purple-400 transition">Predict</a>

            </div>

        </div>

    </nav>

    <!-- HERO SECTION -->
    <section class="hero-wrapper">

        <div class="hero-grid">

            <!-- LEFT -->
            <div class="hero-left space-y-10">

                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-purple-500/10 border border-purple-500/30 text-purple-300 text-sm">

                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>

                    AI Powered Deep Learning System

                </div>

                <div class="space-y-6">

                    <h1 class="text-6xl lg:text-7xl font-black leading-tight">

                        Detect
                        <span class="bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                            Sign Language
                        </span>

                        Using Artificial Intelligence

                    </h1>

                    <p class="text-xl text-gray-400 leading-relaxed max-w-2xl">

                        A deep learning web application that recognizes sign language gestures through image classification using CNN architecture integrated with FastAPI and Laravel.

                    </p>

                </div>

                <div class="flex flex-wrap gap-5">

                    <a href="#predict"
                       class="px-8 py-4 rounded-2xl bg-gradient-to-r from-purple-600 to-blue-600 font-bold text-lg hover:scale-105 transition duration-300 shadow-2xl shadow-purple-500/30">

                        Try AI Detection

                    </a>

                    <a href="#features"
                       class="px-8 py-4 rounded-2xl border border-white/20 bg-white/5 backdrop-blur-xl font-semibold hover:bg-white/10 transition">

                        Learn More

                    </a>

                </div>

                <!-- STATS -->
                <div class="grid grid-cols-3 gap-6 pt-10">

                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-6 text-center">

                        <h2 class="text-4xl font-black text-purple-400">95%</h2>

                        <p class="text-gray-400 mt-2">Accuracy</p>

                    </div>

                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-6 text-center">

                        <h2 class="text-4xl font-black text-blue-400">CNN</h2>

                        <p class="text-gray-400 mt-2">Model</p>

                    </div>

                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-6 text-center">

                        <h2 class="text-4xl font-black text-pink-400">AI</h2>

                        <p class="text-gray-400 mt-2">Powered</p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="hero-right relative">

                <div class="absolute w-[400px] h-[400px] bg-purple-500/30 blur-[120px] rounded-full left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>

                <div class="relative section-card glass-card p-10 shadow-2xl" style="max-width: 520px;">

                    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png"
                         class="w-[320px] md:w-[400px] animate-pulse mx-auto">

                </div>

            </div>

        </div>

    </section>

    <!-- FEATURES -->
    <section id="features" class="py-32 px-6" style="padding: 4rem 1.5rem;">

        <div class="max-w-7xl mx-auto" style="max-width: 1120px; margin: 0 auto;">

            <div class="text-center mb-20">

                <h2 class="text-5xl font-black mb-6">
                    Advanced AI Features
                </h2>

                <p class="text-gray-400 text-xl max-w-3xl mx-auto">

                    Built with modern machine learning technologies and professional web development architecture.

                </p>

            </div>

            <div class="features-grid">

                <div class="feature-card">

                    <div class="w-16 h-16 rounded-2xl bg-purple-500/20 flex items-center justify-center text-3xl mb-8">
                        🧠
                    </div>

                    <h3 class="text-3xl font-bold mb-4">
                        CNN Architecture
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Uses Convolutional Neural Networks for accurate sign language image classification and gesture recognition.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="w-16 h-16 rounded-2xl bg-blue-500/20 flex items-center justify-center text-3xl mb-8">
                        ⚡
                    </div>

                    <h3 class="text-3xl font-bold mb-4">
                        FastAPI Integration
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Real-time image prediction through high-performance API communication between Laravel and TensorFlow.
                    </p>

                </div>

                <div class="feature-card">

                    <div class="w-16 h-16 rounded-2xl bg-pink-500/20 flex items-center justify-center text-3xl mb-8">
                        🎨
                    </div>

                    <h3 class="text-3xl font-bold mb-4">
                        Modern UI/UX
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Professional responsive interface designed for accessibility and modern AI application presentation.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- PREDICTION SECTION -->
    <section id="predict" class="py-32 px-6" style="padding: 4rem 1.5rem;">

        <div class="max-w-5xl mx-auto" style="max-width: 900px; margin: 0 auto;">

<div class="bg-white/5 border border-white/10 backdrop-blur-2xl rounded-[40px] p-10 md:p-16 shadow-2xl predict-panel">

                <div class="text-center mb-14">

                    <h2 class="text-5xl font-black mb-6">
                        Upload Sign Language Image
                    </h2>

                    <p class="text-gray-400 text-lg">
                        Upload an image and let AI detect the sign language alphabet.
                    </p>

                </div>

                @if ($errors->any())
                    <div class="mb-8 bg-amber-500/15 border border-amber-500/40 text-amber-200 p-6 rounded-2xl">
                        <p class="font-bold mb-2">Please fix the following:</p>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/predict') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <label class="block border-2 border-dashed border-purple-500/40 rounded-[30px] p-16 text-center cursor-pointer hover:border-purple-400 transition duration-300 bg-black/20 @error('image') border-red-500/60 @enderror">

                        <input type="file"
                               name="image"
                               accept="image/*"
                               onchange="previewImage(event)"
                               class="hidden"
                               required>

                        <div id="uploadText">

                            <div class="text-7xl mb-6">
                                📤
                            </div>

                            <h3 class="text-3xl font-bold mb-4">
                                Drag & Drop Image
                            </h3>

                            <p class="text-gray-400">
                                or click to browse image files (JPG, PNG, WebP — max 5 MB)
                            </p>

                            @error('image')
                                <p class="text-red-400 mt-4 text-sm">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="flex justify-center">

                            <img id="preview"
                                 class="hidden w-80 rounded-3xl shadow-2xl border border-purple-500">

                        </div>

                    </label>

                    <div class="text-center mt-12">

                        <button type="submit"
                                class="px-12 py-5 rounded-2xl bg-gradient-to-r from-purple-600 to-blue-600 text-xl font-bold hover:scale-105 transition duration-300 shadow-2xl shadow-purple-500/30">

                            Predict Using AI

                        </button>

                    </div>

                </form>

                <!-- RESULT -->
                @if(session('prediction'))

                    <div class="mt-20 bg-gradient-to-r from-purple-900/40 to-blue-900/40 border border-purple-500/30 rounded-[35px] p-10">

                        <h3 class="text-4xl font-black text-center mb-12">
                            Prediction Result
                        </h3>

                        <div class="grid lg:grid-cols-2 gap-12 items-center">

                            <div class="text-center">

                                <img src="{{ asset('storage/' . session('uploaded_image')) }}"
                                     class="w-80 mx-auto rounded-[30px] border border-purple-500 shadow-2xl">

                            </div>

                            <div class="text-center">

                                <div class="text-9xl font-black bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent mb-6">
                                    {{ session('prediction') }}
                                </div>

                                <div class="space-y-4">

                                    <p class="text-2xl text-gray-300">
                                        Prediction Confidence
                                    </p>

                                    <div class="w-full bg-white/10 rounded-full h-5 overflow-hidden">

                                        <div class="h-full bg-gradient-to-r from-green-400 to-emerald-500 rounded-full"
                                             style="width: {{ session('confidence') }}%">

                                        </div>

                                    </div>

                                    <p class="text-3xl font-bold text-green-400">
                                        {{ session('confidence') }}%
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                @endif

                @if(session('error'))

                    <div class="mt-10 bg-red-500/20 border border-red-500 text-red-300 p-6 rounded-2xl text-center space-y-2">

                        <p class="font-bold">Prediction could not complete</p>
                        <p class="text-sm">{{ session('error') }}</p>
                        <p class="text-xs text-red-200/80 mt-2">
                            ML API: {{ $mlServiceUrl ?? config('services.ml.url') }} —
                            run <code class="bg-black/30 px-1 rounded">.\start-ml-server.ps1</code> in edp_python
                            (Laravel on port 8000, ML on 8100).
                        </p>

                    </div>

                @endif

            </div>

        </div>

    </section>

</body>
</html>