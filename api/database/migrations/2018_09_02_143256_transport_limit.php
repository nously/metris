<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransportLimit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_limit', function (Blueprint $table) {
            //id
            $table->increments('id');
            //attr
            $table->date('date');
           
            $table->integer('car_left');
            


            $table->unsignedInteger('id_transport_partner');
            $table->foreign('id_transport_partner')->references('id')->on('transport_partner')->onDelete('cascade');
 
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
        Schema::dropIfExists('transport_limit');
    }
}
