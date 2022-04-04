<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocktails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('taste_id');
            $table->integer('strength_id');
            $table->integer('preparation_id');
            $table->integer('glass_id');
            $table->integer('base_id');
            $table->longText('how_to');
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
        Schema::dropIfExists('cocktails');
    }
}
