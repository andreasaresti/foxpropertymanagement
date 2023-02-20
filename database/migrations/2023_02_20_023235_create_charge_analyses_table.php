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
        Schema::create('charge_analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("charge_id");
            $table->unsignedBigInteger("expense_category_id")->nullable();
            $table->string("name");
            $table->float("amount")->default(0);
            $table->float("non_chargable_amount")->default(0);
            $table->timestamps();
            $table->foreign('charge_id')->references('id')->on('charges');
            $table->foreign('expense_category_id')->references('id')->on('expense_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charge_analyses');
    }
};
