<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuggagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luggages', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('id_pilgrims');
            $table->date('startDate');
            $table->integer("weight");
            $table->string("start");
            $table->string("goal");
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
        Schema::dropIfExists('luggages');
    }
}
