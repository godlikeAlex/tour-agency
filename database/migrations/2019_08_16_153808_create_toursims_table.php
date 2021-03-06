<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toursims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('lang');
            $table->text('keywords');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->longText('post');
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
        Schema::dropIfExists('toursims');
    }
}
