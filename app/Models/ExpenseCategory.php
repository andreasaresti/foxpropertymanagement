<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Traits\HasTranslations;
class ExpenseCategory extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    public function PropertyType()
    {
        return $this->belongsTo(PropertyType::class, "type");
    }
}
