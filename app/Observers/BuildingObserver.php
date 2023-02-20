<?php

namespace App\Observers;

use App\Models\Building;
use App\Models\Fund;

class BuildingObserver
{
    /**
     * Handle the Building "created" event.
     *
     * @param  \App\Models\Building  $building
     * @return void
     */
    public function created(Building $building)
    {
        //
        Fund::create([
            "building_id"=> $building->id,
            "name"=> "owner fund",
            "type"=> "owner"
        ]);

        Fund::create([
            "building_id"=> $building->id,
            "name"=> "tenant fund",
            "type"=> "tenant"
        ]);
    }

    /**
     * Handle the Building "updated" event.
     *
     * @param  \App\Models\Building  $building
     * @return void
     */
    public function updated(Building $building)
    {
        //
    }

    /**
     * Handle the Building "deleted" event.
     *
     * @param  \App\Models\Building  $building
     * @return void
     */
    public function deleted(Building $building)
    {
        //
    }

    /**
     * Handle the Building "restored" event.
     *
     * @param  \App\Models\Building  $building
     * @return void
     */
    public function restored(Building $building)
    {
        //
    }

    /**
     * Handle the Building "force deleted" event.
     *
     * @param  \App\Models\Building  $building
     * @return void
     */
    public function forceDeleted(Building $building)
    {
        //
    }
}
