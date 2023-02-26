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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("ext_code")->nullable()->unique();
            $table->unsignedBigInteger("charge_rule_id")->nullable();
            $table->unsignedBigInteger("fund_id");
            $table->unsignedBigInteger("unit_id");
            $table->unsignedBigInteger("resident_id");
            $table->date("charge_date");
            $table->string("charge_type");
            $table->timestamps();
            $table->foreign('charge_rule_id')->references('id')->on('charge_rules');
            $table->foreign('fund_id')->references('id')->on('funds');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('resident_id')->references('id')->on('residents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charges');
    }
};
