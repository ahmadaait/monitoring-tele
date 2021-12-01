<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Tele1 extends Model
{
  use softDeletes;

  protected $table = "nodes_tele_1";
  protected $fillable = [
    // Kualitas
    'sensor_MQ7',
    'sensor_MQ131',
    'sensor_MQ136',
    'sensor_NH3',
    'sensor_NO2',
    'sensor_DUST',
    // Cuaca
    'sensor_DHT22_TEMP',
    'sensor_DHT22_HUMID',
    'sensor_BME280',
    'sensor_RAIN',
    // Angin
    'sensor_ANEMO',
    'sensor_WIND_DIRECT'
  ];
}