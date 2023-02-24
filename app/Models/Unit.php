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
        return $this->belongsTo(UnitOwnerResident::class, "unit_owner_residents_id");
    }
    
    public function UnitTenantResident(){
        return $this->belongsTo(UnitTenantResident::class, "unit_tenant_residents_id");
    }

    public function owner_residents(){
        return $this->hasMany(UnitOwnerResident::class, "unit_id");
    }

    public function tenant_residents(){
        return $this->hasMany(UnitTenantResident::class, "unit_id");
    }
}
