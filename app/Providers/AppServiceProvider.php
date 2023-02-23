<?php

namespace App\Providers;

use App\Models\Building;
use App\Models\Unit;
use App\Models\UnitOwnerResident;
use App\Models\UnitTenantResident;
use App\Observers\BuildingObserver;
use App\Observers\UnitObserver;
use App\Observers\UnitOwnerResidentObserver;
use App\Observers\UnitTenantResidentObserver;
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
        Unit::observe(UnitObserver::class);
        UnitOwnerResident::observe(UnitOwnerResidentObserver::class);
        UnitTenantResident::observe(UnitTenantResidentObserver::class);
    }
}
