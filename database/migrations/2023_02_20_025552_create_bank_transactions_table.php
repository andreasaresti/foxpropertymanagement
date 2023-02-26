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
        Schema::create('bank_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bank_import_id")->nullable();
            $table->unsignedBigInteger("bank_account_id")->nullable();
            $table->string("reference_number")->nullable();
            $table->string("transaction_type");
            $table->string("type");
            $table->string("description");
            $table->date("transaction_date");
            $table->float("collection_amount")->default(0);
            $table->float("payment_amount")->default(0);
            $table->timestamps();

            $table->foreign('bank_import_id')->references('id')->on('bank_imports');
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_transactions');
    }
};
