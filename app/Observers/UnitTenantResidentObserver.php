<?php

namespace App\Observers;

use App\Models\UnitTenantResident;

class UnitTenantResidentObserver
{
    /**
     * Handle the UnitTenantResident "created" event.
     *
     * @param  \App\Models\UnitTenantResident  $unitTenantResident
     * @return void
     */
    public function created(UnitTenantResident $unitTenantResident)
    {
        $unitTenantResident->end_date = null;
        $unitTenantResident->save();
        //
        $unit = $unitTenantResident->Unit;
        $unitTenants = $unitTenantResident::where("unit_id", $unit->id)->get();
        if(count($unitTenants) > 1){
            $unit_last = $unitTenants[count($unitTenants) - 2];
            $unit_last->end_date = $unitTenantResident->start_date;
            $unit_last->save();
        }
        $unitTenantResident->end_date = null;
        $unitTenantResident->save();

    }

    /**
     * Handle the UnitTenantResident "updated" event.
     *
     * @param  \App\Models\UnitTenantResident  $unitTenantResident
     * @return void
     */
    public function updated(UnitTenantResident $unitTenantResident)
    {
        //
    }

    /**
     * Handle the UnitTenantResident "deleted" event.
     *
     * @param  \App\Models\UnitTenantResident  $unitTenantResident
     * @return void
     */
    public function deleted(UnitTenantResident $unitTenantResident)
    {
        //
    }

    /**
     * Handle the UnitTenantResident "restored" event.
     *
     * @param  \App\Models\UnitTenantResident  $unitTenantResident
     * @return void
     */
    public function restored(UnitTenantResident $unitTenantResident)
    {
        //
    }

    /**
     * Handle the UnitTenantResident "force deleted" event.
     *
     * @param  \App\Models\UnitTenantResident  $unitTenantResident
     * @return void
     */
    public function forceDeleted(UnitTenantResident $unitTenantResident)
    {
        //
    }
}
