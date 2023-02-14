<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "code",
        "constuction_year",
        "management_start_date",
        "address",
        "postal_code",
        "district",
        "country",
        "city",
        "type",
        "responsible",
        "internal_square_metes_payable",
        "covered_veranda",
        "mezanne_payable",
        "other_payable",
        "fixed_percentage",
        "active"
    ];
    
    public function Responsible()
    {
        return $this->belongsTo(User::class, "responsible");
    }

    public function PropertyType()
    {
        return $this->belongsTo(PropertyType::class, "type");
    }
}
