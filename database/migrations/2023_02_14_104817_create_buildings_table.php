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
            $table->string("code")->nullable();
            $table->integer("construction_year")->nullable();
            $table->date("management_start_date")->nullable();
            $table->string("address")->nullable();
            $table->string("postal_code")->nullable();
            $table->string("district")->nullable();
            $table->string("country")->nullable();
            $table->string("city")->default("Cyprus")->nullable(); 
            $table->unsignedBigInteger("type")->nullable();
            $table->unsignedBigInteger("responsible")->nullable();
            $table->boolean("internal_square_metes_payable")->default(true);
            $table->boolean("covered_veranda_payable")->default(true);
            $table->boolean("mezanne_payable")->default(true);
            $table->boolean("other_payable")->default(true);
            $table->boolean("fixed_percentage")->default(false);
            $table->boolean("active")->default(true);
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
