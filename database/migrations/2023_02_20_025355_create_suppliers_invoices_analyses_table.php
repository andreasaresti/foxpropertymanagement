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
        Schema::create('suppliers_invoices_analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("supplier_invoice_id");
            $table->unsignedBigInteger("repair_request_id")->nullable();
            $table->string("name")->nullable();
            $table->float("amount_technician")->nullable();
            $table->float("amount_building")->nullable();
            $table->timestamps();
            $table->foreign('supplier_invoice_id')->references('id')->on('suppliers_invoices');
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
        Schema::dropIfExists('suppliers_invoices_analyses');
    }
};
