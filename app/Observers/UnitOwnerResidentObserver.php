<?php

namespace App\Observers;

use App\Models\UnitOwnerResident;
use App\Models\Fund;

class UnitOwnerResidentObserver
{
    /**
     * Handle the UnitOwnerResident "created" event.
     *
     * @param  \App\Models\UnitOwnerResident  $unitOwnerResident
     * @return void
     */
    public function created(UnitOwnerResident $unitOwnerResident)
    {
        $unitOwnerResident->end_date = null;
        $unitOwnerResident->save();
        //
        $unit = $unitOwnerResident->Unit;
        $unitOwners = $unitOwnerResident::where("unit_id", $unit->id)->get();
        if(count($unitOwners) > 1){
            $unit_last = $unitOwners[count($unitOwners) - 2];
            $unit_last->end_date = $unitOwnerResident->start_date;
            $unit_last->save();
        }
        $unitOwnerResident->end_date = null;
        $unitOwnerResident->save();
    }

    /**
     * Handle the UnitOwnerResident "updated" event.
     *
     * @param  \App\Models\UnitOwnerResident  $unitOwnerResident
     * @return void
     */
    public function updated(UnitOwnerResident $unitOwnerResident)
    {
        //
    }

    /**
     * Handle the UnitOwnerResident "deleted" event.
     *
     * @param  \App\Models\UnitOwnerResident  $unitOwnerResident
     * @return void
     */
    public function deleted(UnitOwnerResident $unitOwnerResident)
    {
        //
    }

    /**
     * Handle the UnitOwnerResident "restored" event.
     *
     * @param  \App\Models\UnitOwnerResident  $unitOwnerResident
     * @return void
     */
    public function restored(UnitOwnerResident $unitOwnerResident)
    {
        //
    }

    /**
     * Handle the UnitOwnerResident "force deleted" event.
     *
     * @param  \App\Models\UnitOwnerResident  $unitOwnerResident
     * @return void
     */
    public function forceDeleted(UnitOwnerResident $unitOwnerResident)
    {
        //
    }
}
