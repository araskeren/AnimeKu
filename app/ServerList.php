<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServerList extends Model
{
    protected $table='server_list';
    protected $fillable=['id_episode','server','download','streaming'];

    public function tambahServer($data,$idEps){
      for ($i=0; $i < count($data->stream); $i++) {
        $episode[]=[
          'id_episode'=>$idEps,
          'server'=>$i+1,
          'streaming'=>$data->stream[$i],
          'download'=>$data->download[$i]
        ];
      }
      if($episode!=null){
        $this->insert($episode);
      }
    }
    public function editServer($data,$idEps){
      $dataSekarang=$this->where('id_episode',$idEps)->get();
      for ($i=0; $i < count($data->stream); $i++){
        $dataSekarang[$i]->update([
          'id_episode'=>$idEps,
          'streaming'=>$data->stream[$i],
          'download'=>$data->download[$i],
        ]);
      }
    }

    public function getAllServer($id){
      return $this->where('id_episode',$id)->get();
    }
}
