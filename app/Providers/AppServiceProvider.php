<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Villa;
use App\Models\SeoSetting;

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
        view()->composer('*', function ($view) {
            $villaName = Villa::first()->name;
            $villaSlug = Villa::first()->slug;
            $seoSettings = SeoSetting::firstOrFail();

            $view->with(compact('villaName', 'villaSlug', 'seoSettings'));
        });
    }
}
