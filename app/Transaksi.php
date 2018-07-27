<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $table='transaksi';

  protected $fillable=[
    'id_paket','id_user','status_pembayaran','tanggal_konfirmasi',
  ];
  public function getPaket(){
    return $this->belongsTo(Paket::class,'id_paket');
  }
  public function getUser(){
    return $this->belongsTo(User::class,'id_user');
  }

  public function konfirmasi($id,$tanggal){
    $transaksi=$this->select('id_user','id_paket')->where('id',$id)->first();
    $data=$transaksi;
    $this->where('id',$id)->update([
      'status_pembayaran'=>1,
      'tanggal_konfirmasi'=>$tanggal,
    ]);
    return $data;
  }

  public function getAll(){
    return $this->orderBy('created_at','desc')->orderBy('status_pembayaran','desc')->get();
  }
}
