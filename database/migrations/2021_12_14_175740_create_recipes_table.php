<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('Country');
            $table->string('CoockingTime');
            $table->string('PrepTime');
            $table->string('NumberOfServing');
            $table->string('Thumbnail');
            $table->string('Image');
            $table->string('Image2');
            $table->bigInteger('CatId')->unsigned();
            $table->foreign('CatId')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('recipes');
    }
}
