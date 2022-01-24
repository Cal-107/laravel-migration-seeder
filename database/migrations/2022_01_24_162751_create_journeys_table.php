<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 50);
            $table->string('airport', 50);
            $table->tinyInteger('flight_hours');
            $table->dateTime('departure_date');
            $table->dateTime('arrival_date');
            $table->dateTime('comeback_departure_date');
            $table->dateTime('comeback_arrival_date');
            $table->boolean('shuttle_service');
            $table->boolean('hotel');
            $table->unsignedTinyInteger('price');
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
        Schema::dropIfExists('journeys');
    }
}
