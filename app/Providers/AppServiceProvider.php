<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\Setting;
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
    {view()->composer('*', function ($view) {
            $view->with(
                'setting', Setting::pluck('value', 'key')->toArray());
        });
        Paginator::useBootstrap();
    }
}
