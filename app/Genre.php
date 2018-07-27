<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $table='genre';

  protected $fillable=[
    'genre',
  ];
  public function getAll(){
    return $this->select('id','genre')->get();
  }
}
