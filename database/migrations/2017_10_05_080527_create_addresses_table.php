<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('number')->nullable();
            $table->string('street');
            $table->string('zipcode', 5);
            $table->text('city');
            $table->integer('flatNumber')->nullable();
            $table->integer('floor')->nullable();
            $table->string('flatName')->nullable();
            $table->decimal('latitude', 13, 11)->nullable();
            $table->decimal('longitude', 13, 11)->nullable();
            $table->string('phone', 10);
            $table->string('mobile', 10);
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
        Schema::dropIfExists('addresses');
    }
}
