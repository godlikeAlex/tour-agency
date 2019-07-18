<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('city_id');
            $table->string('category');
            $table->string('lang');
            $table->string('category_price')->nullable();
            $table->text('preview');
            $table->longText('about');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('city_items');
    }
}
