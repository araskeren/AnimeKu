<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
  protected $table='studio';

  protected $fillable=[
    'user_id','nama_studio','suka','tidak_suka','total_anime',
  ];
  public function getNamaStudio(){
    return $this->select('id','nama_studio')->get();
  }
}
