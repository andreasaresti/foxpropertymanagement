<?php

namespace App\Providers;

use App\Models\Building;
use App\Observers\BuildingObserver;
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
        //
        //parent::boot();
        Building::observe(BuildingObserver::class);
    }
}
