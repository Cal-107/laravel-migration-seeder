<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 80);
            $table->string('airport', 80);
            $table->tinyInteger('flight_hours');
            $table->string('departure', 20);
            $table->string('arrival', 20);
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
        Schema::dropIfExists('list');
    }
}
