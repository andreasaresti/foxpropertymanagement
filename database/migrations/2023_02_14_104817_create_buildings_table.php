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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code")->default(null);
            $table->integer("construction_year")->default(null);
            $table->date("management_start_date");
            $table->string("address");
            $table->string("postal_code");
            $table->string("district");
            $table->string("country");
            $table->string("city")->default("Cyprus"); 
            $table->unsignedBigInteger("type");
            $table->unsignedBigInteger("responsible");
            $table->boolean("internal_square_metes_payable")->default(true);
            $table->boolean("covered_veranda_payable")->default(true);
            $table->boolean("mezanne_payable")->default(true);
            $table->boolean("other_payable")->default(true);
            $table->boolean("fixed_percentage")->default(false);
            $table->boolean("active");
            $table->timestamps();

            $table->foreign('type')->references('id')->on('property_types');
            $table->foreign("responsible")->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
};
