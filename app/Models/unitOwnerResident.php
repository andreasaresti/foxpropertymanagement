<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitOwnerResident extends Model
{
    use HasFactory;

    protected $casts = [
        "start_date"=> "date",
        "end_date"=> "date"
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

}
