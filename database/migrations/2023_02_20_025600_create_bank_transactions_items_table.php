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
        Schema::create('bank_transactions_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bank_transaction_id");
            $table->unsignedBigInteger("supplier_id")->nullable();
            $table->unsignedBigInteger("invoices_no_repair_request_id")->nullable();
            $table->unsignedBigInteger("invoices_with_repair_request_id")->nullable();
            $table->unsignedBigInteger("charge_id")->nullable();
            $table->unsignedBigInteger("fund_id")->nullable();
            $table->float("collection_amount")->default(0);
            $table->float("payment_amount")->default(0);
            $table->timestamps();

            $table->foreign('bank_transaction_id')->references('id')->on('bank_transactions');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('invoices_no_repair_request_id')->references('id')->on('supplier_invoices_no_repair_requests');
            $table->foreign('invoices_with_repair_request_id')->references('id')->on('supplier_invoices_with_repair_requests');
            $table->foreign('charge_id')->references('id')->on('charges');
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
        Schema::dropIfExists('bank_transactions_items');
    }
};
