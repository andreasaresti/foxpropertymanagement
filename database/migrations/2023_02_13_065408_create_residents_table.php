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
            $table->string("lastnamephone");
            $table->string("email");
            $table->string("address");
            $table->string("extcode");
            $table->string("fathername");
            $table->date("birthdate");
            $table->string("id_number");
            $table->string("passport");
            $table->string("gender");
            $table->string("mobile");
            $table->string("workphone");
            $table->string("faxnumber");
            $table->string("otherphone1");
            $table->string("otherphone2");
            $table->string("email2");
            $table->string("city");
            $table->string("district");
            $table->string("country");
            $table->string("postalcode");
            $table->string("mailaddress1");
            $table->string("mailaddress2");
            $table->string("mailcity");
            $table->string("maildistrict");
            $table->string("mailcountry");
            $table->string("mailpostalcode");
            $table->string("currentemployer");
            $table->string("jobtitle");
            $table->string("workaddress1");
            $table->string("workaddress2");
            $table->string("workcity");
            $table->string("workdistrict");
            $table->string("workcountry");
            $table->string("workpostalcode");
            $table->string("comments");
            $table->string("emergency_address_country");
            $table->string("emergency_address_city");
            $table->string("emergency_address");
            $table->string("emergency_address_postal_code");
            $table->string("emergency_address_phone");
            $table->string("emergency_address_mobile");
            $table->string("active");
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
