<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!app()->runningInConsole() && \Illuminate\Support\Facades\Schema::hasTable('site_settings')) {
            $site = \App\Models\SiteSetting::first();
            \Illuminate\Support\Facades\View::share('site', $site);
            
            $home_settings = \App\Models\HomeSetting::first();
            \Illuminate\Support\Facades\View::share('home_settings', $home_settings);

            $service_list = \App\Models\ServicePage::where('display', '1')->get();
            \Illuminate\Support\Facades\View::share('service_list', $service_list);
        }
    }
}
