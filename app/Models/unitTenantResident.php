<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitTenantResident extends Model
{
    use HasFactory;
    protected $casts = [
        "start_date"=> "date",
        "end_date"=> "date"
    ];

    protected $fillable = [
        "unit_id","resident_id", "start_date", "end_date"
    ];
    
    public function Resident(){
        return $this->belongsTo(Resident::class);
    }

    public function Unit(){
        return $this->belongsTo(Unit::class);
    }
}
