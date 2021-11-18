<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeTele2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes_tele_2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('MQ7');
            $table->string('MQ131');
            $table->string('MQ136');
            $table->string('NH3');
            $table->string('NO3');
            $table->string('DUST');
            $table->string('DHT22');
            $table->string('BME280');
            $table->string('RAIN');
            $table->string('ANEMO');
            $table->string('WIND_DIRECT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes_tele_2');
    }
}
