<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function owner_residents(){
        return $this->belongsToMany(Resident::class, "unit_owner_residents", "resident_id", "unit_id");
    }

    public function tenant_residents(){
        return $this->belongsToMany(Resident::class, "unit_tenant_residents", "resident_id", "unit_id");
    }
}
