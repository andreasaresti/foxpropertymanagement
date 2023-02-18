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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("building_id");
            $table->integer("number");
            $table->string("floor")->nullable();
            $table->string("apartment_type")->nullable();
            $table->float("internal_sq_meters")->default(0);
            $table->float("covered_venanda")->default(0);
            $table->float("uncovered_vananda")->default(0);
            $table->string("mezanee")->default(0);
            $table->float("other")->default(0);
            $table->string("payable_area")->default(0);
            $table->float("owner_percentage")->default(0);
            $table->string("committe")->default('no');
            $table->string("address")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
};
