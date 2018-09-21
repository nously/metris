<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
           //id
            $table->increments('id');
            //attr
            $table->string('phone');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email');
            $table->string('province');
            $table->string('city');
            $table->text('address');
            $table->boolean('isAdmin');
            $table->string('type');


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
        Schema::dropIfExists('account');
    }
}
