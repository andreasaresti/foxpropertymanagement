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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->string("phone");
            $table->string("email");
            $table->string("address")->nullable();
            $table->string("extcode")->nullable();
            $table->string("fathername")->nullable();
            $table->date("birthdate")->nullable();
            $table->string("id_number")->unique()->nullable();
            $table->string("passport")->unique()->nullable();
            $table->string("gender")->nullable();
            $table->string("mobile")->nullable();
            $table->string("workphone")->nullable();
            $table->string("faxnumber")->nullable();
            $table->string("otherphone1")->nullable();
            $table->string("otherphone2")->nullable();
            $table->string("email2")->nullable();
            $table->string("city")->nullable();
            $table->string("district")->nullable();
            $table->string("country")->nullable();
            $table->string("postalcode")->nullable();
            $table->string("mailaddress1")->nullable();
            $table->string("mailaddress2")->nullable();
            $table->string("mailcity")->nullable();
            $table->string("maildistrict")->nullable();
            $table->string("mailcountry")->nullable();
            $table->string("mailpostalcode")->nullable();
            $table->string("currentemployer")->nullable();
            $table->string("jobtitle")->nullable();
            $table->string("workaddress1")->nullable();
            $table->string("workaddress2")->nullable();
            $table->string("workcity")->nullable();
            $table->string("workdistrict")->nullable();
            $table->string("workcountry")->nullable();
            $table->string("workpostalcode")->nullable();
            $table->string("emergency_address_country")->nullable();
            $table->string("emergency_address_city")->nullable();
            $table->string("emergency_address")->nullable();
            $table->string("emergency_address_postal_code")->nullable();
            $table->string("emergency_address_phone")->nullable();
            $table->string("emergency_address_mobile")->nullable();
            $table->string("comments")->nullable();
            $table->string("active")->default(1);
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
        Schema::dropIfExists('residents');
    }
};
