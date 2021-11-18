<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Tele1 extends Model
{
  use softDeletes;

  protected $fillable = [
    'MQ7',
    // 'MQ131',
    // 'MQ136',
    // 'NH3',
    // 'NO3',
    // 'DUST',
    // 'DHT22',
    // 'BME280',
    // 'RAIN',
    // 'ANEMO',
    // 'WIND_DIRECT'
  ];
}