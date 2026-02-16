<?php

/**
 * Laravel Application Entry Point
 * 
 * This file redirects all requests to the public folder
 * For Hostinger/cPanel deployment
 */

// Define the public path
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Check if the request is for a file in the public directory
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Redirect to public/index.php
require_once __DIR__.'/public/index.php';
