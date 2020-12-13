<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class Createpoets extends Migration
{
    public function up()
    {
        Schema::dropIfExists('poets');
        Schema::create('poets', function (Blueprint $table) {
            $table->increments('poet_code');
            $table->string('first_name',200);
            $table->string('surname',200);
            $table->string('address',200);
            $table->string('postcode',200);
            $table->string('telephone_number',200);
        });    
    }

    public function down()
    {
        Schema::table('poets', function (Blueprint $table) {
            Schema::dropIfExists('poets');
        });
    }
}