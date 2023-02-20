<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeRules extends Model
{
    use HasFactory;

    protected $casts = [
        "start_date"=> "date"
    ];

    public function Fund()
    {
        return $this->belongsTo(Fund::class);
    }
}
