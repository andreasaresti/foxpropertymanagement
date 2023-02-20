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
        Schema::create('charge_rules', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("ext_code")->nullable()->unique();
            $table->unsignedBigInteger("fund_id");
            $table->date("start_date");
            $table->integer("recurrence_number")->default(1);
            $table->integer("cycles_number")->default(1);
            $table->timestamps();
            $table->foreign('fund_id')->references('id')->on('funds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charge_rules');
    }
};
