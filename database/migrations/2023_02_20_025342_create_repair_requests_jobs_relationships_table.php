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
        Schema::create('repair_requests_jobs_relationships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("repair_request_id");
            $table->unsignedBigInteger("job_category_id");
            $table->timestamps();
            $table->foreign('repair_request_id')->references('id')->on('repair_requests');
            $table->foreign('job_category_id')->references('id')->on('job_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_requests_jobs_relationships');
    }
};
