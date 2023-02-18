<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function building(){
        return $this->belongsTo(Building::class);
    }

    public function UnitOwnerResident(){
        return $this->belongsTo(UnitOwnerResident::class);
    }
    public function UnitTenantResident(){
        return $this->belongsTo(UnitTenantResident::class);
    }

    public function owner_residents(){
        return $this->belongsToMany(Resident::class, "unit_owner_residents", "unit_id", "resident_id")->withPivot('start_date', 'end_date');
    }

    public function tenant_residents(){
        return $this->belongsToMany(Resident::class, "unit_tenant_residents", "unit_id", "resident_id")->withPivot('start_date', 'end_date');
    }
}
