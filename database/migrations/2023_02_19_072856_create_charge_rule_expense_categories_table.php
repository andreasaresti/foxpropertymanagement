<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_rule_expense_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("charge_rule_id");
            $table->unsignedBigInteger("expense_category_id");
            $table->float("chargable_amount")->nullable();
            $table->float("non_chargable_amount")->nullable();
            $table->timestamps();
            $table->foreign('expense_category_id')->references('id')->on('expense_categories');
            $table->foreign('charge_rule_id')->references('id')->on('charge_rules');
            $table->unique('charge_rule_id', 'expense_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charge_rule_expense_categories');
    }
};
