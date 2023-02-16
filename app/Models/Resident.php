<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $casts = [
        "birthdate"=> "date"
    ];

    public function onwer_units(){
        return $this->belongsToMany(Unit::class, "unit_owner_residents", "unit_id", "resident_id");
    }

    public function tenant_units(){
        return $this->belongsToMany(Unit::class, "unit_tenant_residents", "unit_id", "resident_id");
    }
}
