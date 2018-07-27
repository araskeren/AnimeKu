<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
  protected $table='komentar';

  protected $fillable=[
    'user','episode','komentar',
  ];
  public function getUser(){
    return $this->belongsTo(User::class,'user');
  }
  public function tambahKomentar($user,$data){
    $this->user=$user;
    $this->episode=$data->id_episode;
    $this->komentar=$data->komentar;
    $this->save();
  }
  public function getKomentar($id){
    return $this->where('episode',$id)->get();
  }
}
