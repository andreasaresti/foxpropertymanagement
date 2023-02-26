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
        Schema::create('supplier_invoices_with_repair_requests', function (Blueprint $table) {
            $table->id();
            $table->string("reference_number")->nullable();
            $table->unsignedBigInteger("supplier_id");
            $table->unsignedBigInteger("repair_request_id")->nullable();
            $table->unsignedBigInteger("fund_id");
            $table->date("invoice_date");
            $table->string("attachment");
            $table->float("amount_technician")->default(0);
            $table->float("amount_building")->default(0);
            $table->binary("paid")->default(0);
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('fund_id')->references('id')->on('funds');
            $table->foreign('repair_request_id')->references('id')->on('repair_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_invoices_with_repair_requests');
    }
};
