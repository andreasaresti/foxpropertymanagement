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
        Schema::create('unit_tenant_residents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("unit_id");
            $table->date("start_date");
            $table->date("end_date")->nullable();
            $table->timestamps();
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_tenant_residents');
    }
};
