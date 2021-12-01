<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeTele1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes_tele_1', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sensor_MQ7')->nullable();
            $table->string('sensor_MQ131')->nullable();
            $table->string('sensor_MQ136')->nullable();
            $table->string('sensor_NH3')->nullable();
            $table->string('sensor_NO2')->nullable();
            $table->string('sensor_DUST')->nullable();
            $table->string('sensor_DHT22_TEMP')->nullable();
            $table->string('sensor_DHT22_HUMID')->nullable();
            $table->string('sensor_BME280')->nullable();
            $table->string('sensor_RAIN')->nullable();
            $table->string('sensor_ANEMO')->nullable();
            $table->string('sensor_WIND_DIRECT')->nullable();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes_tele_1');
    }
}
