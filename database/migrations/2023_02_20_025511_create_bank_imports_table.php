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
        Schema::create('bank_imports', function (Blueprint $table) {
            $table->id();
            $table->string("reference_number")->nullable();
            $table->string("description");
            $table->date("transaction_date");
            $table->string("payment")->default(0);
            $table->string("collection")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_imports');
    }
};
