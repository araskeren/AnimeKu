<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  protected $table='histori';

  protected $fillable=[
    'user','episode',
  ];
}
