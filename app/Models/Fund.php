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
    public function Building()
    {
        return $this->belongsTo(Building::class);
    }
}
