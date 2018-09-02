<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tourist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist', function (Blueprint $table) {
           //id
           $table->increments('id');
           //attr
           $table->string('nik');
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
        Schema::dropIfExists('tourist');
    }
}
