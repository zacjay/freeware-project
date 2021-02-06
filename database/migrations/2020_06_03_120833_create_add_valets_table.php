<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddValetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_valets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('username');
            $table->String('email');
            $table->String('password');
            $table->String('contact');
            $table->String('vehicle');
            $table->String('company');
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
        Schema::dropIfExists('add_valets');
    }
}
