<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeRuleUnitPercentage extends Model
{
    use HasFactory;

    public function ChargeRule()
    {
        return $this->belongsTo(ChargeRules::class);
    }
    
    public function Unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
