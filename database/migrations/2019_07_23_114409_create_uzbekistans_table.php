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
            $table->string('sub-category')->nullable();
            $table->string('image')->nullable();
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
