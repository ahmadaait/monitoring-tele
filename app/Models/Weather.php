<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Weather extends Model
{
  use softDeletes;

  protected $table = "weather_tele_1";
  protected $fillable = [
    // Cuaca
    'DHT22_TEMP',
    'DHT22_HUMID',
    'BME280',
    'RAIN'
  ];
}