<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeRuleExpenseCategory extends Model
{
    use HasFactory;

    public function ChargeRule()
    {
        return $this->belongsTo(ChargeRules::class);
    }

    public function ExpenseCategory()
    {
        return $this->belongsTo(ExpenseCategory::class);
    }
}
