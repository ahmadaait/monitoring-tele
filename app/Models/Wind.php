<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Wind extends Model
{
  use softDeletes;

  protected $table = "wind_tele1";
  protected $fillable = [
    // Angin
    'ANEMO',
    'WIND_DIRECT'
  ];
}