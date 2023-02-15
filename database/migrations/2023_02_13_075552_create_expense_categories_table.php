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
        Schema::create('expense_categories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("type");
            $table->string("applied_for");
            $table->boolean("building_expense")->default(true);
            $table->boolean("non_building_expense")->default(true);
            $table->boolean("active")->default(true);
            $table->timestamps();

            $table->foreign('type')->references('id')->on('property_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_categories');
    }
};
