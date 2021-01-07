<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Runners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->id();
            $table->string('runnerId');
           
            $table->string('runnerName');
            $table->string('runnerEmail');
            $table->string('runnerPhone');
            $table->string('runnerAddress');
            $table->string('runnerBusinessName');
            $table->string('runnerBusinessContact');
            $table->string('runnerBusinessEmail');
            $table->string('runnerBusinessAddress');
            $table->string('runnerBusinessCategory');
            $table->string('runnerBusinessLogo');
            

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
