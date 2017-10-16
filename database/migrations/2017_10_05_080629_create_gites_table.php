<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gites', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->integer('address_id')->nullable();
            $table->integer('step_id');
            $table->decimal('latitude', 13, 11)->nullable();
            $table->decimal('longitude', 13, 11)->nullable();
            // $table->integer('steporder');
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
        Schema::dropIfExists('gites');
    }
}
