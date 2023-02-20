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
        Schema::create('suppliers_invoices', function (Blueprint $table) {
            $table->id();
            $table->string("reference_number")->nullable();
            $table->unsignedBigInteger("supplier_id");
            $table->unsignedBigInteger("job_category_id")->nullable();
            $table->unsignedBigInteger("fund_id");
            $table->date("invoice_date");
            $table->string("attachment");
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('job_category_id')->references('id')->on('job_categories');
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
        Schema::dropIfExists('suppliers_invoices');
    }
};
