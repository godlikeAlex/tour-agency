<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name');
            $table->text('keywords');
            $table->text('seo_desc');
            $table->string('lang');
            $table->text('desc');
            $table->string('price');
            $table->string('category');
            $table->string('video');
            $table->string('days');
            $table->string('starts');
            $table->string('ends');
            $table->string('age_from');
            $table->string('age_to');
            $table->string('pdf');
            $table->string('physical_rating');
            $table->longText('about');
            $table->string('image')->nullable();
            $table->string('map')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
