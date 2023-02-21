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
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("fund_id");
            $table->unsignedBigInteger("resident_id");
            $table->unsignedBigInteger("openedby_id");
            $table->unsignedBigInteger("internal_person_assigned_id")->nullable();
            $table->unsignedBigInteger("external_person_assigned_id")->nullable();
            $table->dateTime("requested_datetime");
            $table->date("expected_completion_date")->nullable();
            $table->longText("comments_for_customer")->nullable();
            $table->longText("internal_comments")->nullable();
            $table->float("amount_for_technician")->nullable();
            $table->float("amount_for_building")->nullable();
            $table->binary("status")->nullable();
            $table->timestamps();
            $table->foreign('fund_id')->references('id')->on('funds');
            $table->foreign('resident_id')->references('id')->on('residents');
            $table->foreign('openedby_id')->references('id')->on('users');
            $table->foreign('internal_person_assigned_id')->references('id')->on('users');
            $table->foreign('external_person_assigned_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_requests');
    }
};
