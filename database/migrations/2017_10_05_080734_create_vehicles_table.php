<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string("brand");
            $table->string("type");
            $table->string("vehicleRegistration");
            $table->integer("capacity");
            $table->integer("maxLuggages");
            $table->integer("minWeight");
            $table->integer("maxWeight");
            $table->integer("insuranceNumber");
            $table->date("technicalControl");
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
        Schema::dropIfExists('vehicles');
    }
}
