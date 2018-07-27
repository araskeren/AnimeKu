<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table='paket';

    protected $fillable=[
      'nama','fitur','masa_aktif','harga',
    ];

    public function tambahPaket($data){
      $this->nama=$data->nama;
      $this->fitur=$data->fitur;
      $this->masa_aktif=$data->masa_aktif;
      $this->harga=$data->harga;
      $this->save();
    }

    public function editPaket($id,$data){
      $this->where('id',$id)->update([
        'nama'=>$data->nama,
        'fitur'=>$data->fitur,
        'masa_aktif'=>$data->masa_aktif,
        'harga'=>$data->harga,
      ]);
    }
    public function deletePaket($id){
      $paket=$this->where('id',$id)->first();
      $nama=$paket->nama;
      $paket->delete();
      return $nama;
    }
    public function getData($id){
      return $this->where('id',$id)->first();
    }
    public function getAll(){
      return $this->get();
    }
}
