<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $fillable = [
        "name","building_id", "type", "starting_balance"
    ];

    public function charge_rules(){
        return $this->hasMany(ChargeRules::class);
    }

    public function Building()
    {
        return $this->belongsTo(Building::class);
    }
}
