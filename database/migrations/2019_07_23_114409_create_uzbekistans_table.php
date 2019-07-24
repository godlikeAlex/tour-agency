<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUzbekistansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzbekistans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name') ;
            $table->string('category');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('lang');
            $table->longText('about');
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
        Schema::dropIfExists('uzbekistans');
    }
}
