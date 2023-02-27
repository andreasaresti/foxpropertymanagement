<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charges extends Model
{
    use HasFactory;
    protected $casts = [
        "charge_date"=> "date"
    ];

    public function ChargeRule()
    {
        return $this->belongsTo(ChargeRules::class);
    }

    public function Fund()
    {
        return $this->belongsTo(Fund::class);
    }

    public function Unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function Resident()
    {
        return $this->belongsTo(Resident::class);
    }
}
