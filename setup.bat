@echo off
echo Laravel Setup Script
echo =====================
echo.

echo Step 1: Installing Composer Dependencies...
composer install
if %errorlevel% neq 0 (
    echo Error: Composer install failed!
    pause
    exit /b 1
)
echo.

echo Step 2: Generating Application Key...
php artisan key:generate
if %errorlevel% neq 0 (
    echo Error: Key generation failed!
    pause
    exit /b 1
)
echo.

echo Step 3: Setup Complete!
echo.
echo To start the server, run: php artisan serve
echo.
pause
