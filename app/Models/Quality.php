<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Quality extends Model
{
  use softDeletes;

  protected $table = "quality_tele_1";
  protected $fillable = [
    // Kualitas
    'MQ7',
    'MQ131',
    'MQ136',
    'NH3',
    'NO3',
    'DUST'
  ];
}