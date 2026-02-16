<?php

use App\Models\ServicePage;
use Illuminate\Support\Facades\Route;

Route::get('/debug-db-services', function () {
    $services = ServicePage::all();
    return $services;
});
