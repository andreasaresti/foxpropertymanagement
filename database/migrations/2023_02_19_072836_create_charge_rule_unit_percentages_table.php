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
        Schema::create('charge_rule_unit_percentages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("charge_rule_id");
            $table->unsignedBigInteger("unit_id");
            $table->float("percentage")->nullable();
            $table->timestamps();
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('charge_rule_id')->references('id')->on('charge_rules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charge_rule_unit_percentages');
    }
};
