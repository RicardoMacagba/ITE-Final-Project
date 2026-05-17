# Start Laravel on port 8000 (keep 8100 free for the Python ML service).
$ErrorActionPreference = "Stop"
Set-Location $PSScriptRoot

if (-not (Test-Path "public\storage")) {
    php artisan storage:link
}

Write-Host "Laravel: http://127.0.0.1:8000"
Write-Host "Start ML separately: cd C:\Users\Ricardo\edp_python; .\start-ml-server.ps1"

php artisan serve --host=127.0.0.1 --port=8000
