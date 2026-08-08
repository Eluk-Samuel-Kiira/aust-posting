<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\CountryService;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.header', function ($view) {
            $countryService = app(CountryService::class);

            // Fetch categories
            $categories = $countryService->api('all_categories', [], 'GET', 3600);
            
            // Fetch locations
            $locations = $countryService->api('locations', [], 'GET', 3600);

            $view->with('navCategories', is_array($categories) ? $categories : []);
            $view->with('navLocations', is_array($locations) ? $locations : []);
        });
    }
}