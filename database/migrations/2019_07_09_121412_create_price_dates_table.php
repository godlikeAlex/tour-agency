<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tour_id');
            $table->string('starts');
            $table->string('ends');
            $table->string('places');
            $table->string('price');
            $table->string('status');
            $table->string('lang');
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
        Schema::dropIfExists('price_dates');
    }
}