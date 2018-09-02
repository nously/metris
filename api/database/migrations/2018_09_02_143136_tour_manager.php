<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TourManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_manager', function (Blueprint $table) {
                     //id
                     $table->increments('id');
                     //attr
                     $table->string('logo');
                     $table->double('long');
                     $table->double('lat');
                     $table->string('cs_phone');


                     $table->unsignedInteger('id_account');
                     $table->foreign('id_account')->references('id')->on('account')->onDelete('cascade');
          
                     //timestamp
                     $table->softDeletes();
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
        Schema::dropIfExists('tour_manager');
    }
}
