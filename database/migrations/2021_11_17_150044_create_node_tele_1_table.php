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
            $table->string('MQ7')->nullable();
            $table->string('MQ131')->nullable();
            $table->string('MQ136')->nullable();
            $table->string('NH3')->nullable();
            $table->string('NO3')->nullable();
            $table->string('DUST')->nullable();
            $table->string('DHT22')->nullable();
            $table->string('BME280')->nullable();
            $table->string('RAIN')->nullable();
            $table->string('ANEMO')->nullable();
            $table->string('WIND_DIRECT')->nullable();

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
