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
            $table->string("floor");
            $table->string("apartment_type");
            $table->float("internal_sq_meters")->default(0);
            $table->float("covered_venanda")->default(0);
            $table->float("uncovered_vananda")->default(0);
            $table->string("mezanee");
            $table->float("other")->default(0);
            $table->string("payable_area");
            $table->float("owner_percentage");
            $table->string("committe");
            $table->string("address");
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
