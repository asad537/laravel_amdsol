<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('sitemap.xml', [HomeController::class, 'sitemap']);

Route::get('blog', [HomeController::class, 'blog']);
Route::get('blog/{seokey}', [HomeController::class, 'blog_post']);

Route::get('services', [HomeController::class, 'services']);
Route::get('about-us', [HomeController::class, 'about']);
Route::get('contact-us.php', [HomeController::class, 'contact']);
Route::post('contact-us.php', [HomeController::class, 'contact']);

Route::get('case-studies', [HomeController::class, 'case_studies']);
Route::get('case-study/{seokey}', [HomeController::class, 'case_study_detail']);
Route::get('specialties', [HomeController::class, 'specialties']);
Route::get('cardiology-billing-services', [HomeController::class, 'cardiology']);
Route::get('medical-billing-outsourcing', [HomeController::class, 'outsource_billing']);
Route::get('denial-management-services', [HomeController::class, 'denial_management']);
Route::get('large-practices', [HomeController::class, 'large_practices']);
Route::get('small-practices', [HomeController::class, 'small_practices']);
Route::get('hospital-billing-services', [HomeController::class, 'hospital_billing']);
Route::get('pediatric-billing-services', [HomeController::class, 'pediatric']);
Route::get('neurology-billing-services', [HomeController::class, 'neurology']);
Route::get('radiology-billing-services', [HomeController::class, 'radiology']);
Route::get('physician-billing-services', [HomeController::class, 'physician_billing']);
Route::get('request-demo', [HomeController::class, 'demo']);
Route::post('request-demo', [HomeController::class, 'demo']);

// Privacy Policy
Route::get('privacy-policy', function () {
    return view('privacy_policy');
});


// Auth routes
Route::get('signin', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
Route::post('signin', [App\Http\Controllers\Admin\AuthController::class, 'login']);
Route::get('signup', [App\Http\Controllers\Admin\AuthController::class, 'showRegisterForm']);
Route::post('signup', [App\Http\Controllers\Admin\AuthController::class, 'register']);
Route::get('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout']);

// Admin routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('home', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('banners', App\Http\Controllers\Admin\BannersController::class);
    Route::resource('service-pages', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('static-pages', App\Http\Controllers\Admin\StaticPageController::class);
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('case_studies', App\Http\Controllers\Admin\CaseStudyController::class);
    
    Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::post('profile', [App\Http\Controllers\Admin\ProfileController::class, 'update']);
    
    Route::get('home-settings', [App\Http\Controllers\Admin\HomeSettingController::class, 'index']);
    Route::post('home-settings', [App\Http\Controllers\Admin\HomeSettingController::class, 'update']);
    
    Route::get('settings', [App\Http\Controllers\Admin\SettingsController::class, 'index']);
    Route::post('settings', [App\Http\Controllers\Admin\SettingsController::class, 'update']);
});

// Fallback for check_page logic
Route::get('{seokey}', [HomeController::class, 'check_page']);
Route::post('{seokey}', [HomeController::class, 'check_page']);
