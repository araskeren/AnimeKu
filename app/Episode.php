<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Anime;
class Episode extends Model
{
  protected $table='episode';

  protected $fillable=[
    'user','anime','episode','keterangan',
  ];
  public function getanime(){
    return $this->belongsTo(Anime::class,'anime');
  }
  public function getAll($id){
    return $this->where('anime',$id)->get();
  }
  public function getAllDesc($id){
    return $this->where('anime',$id)->orderBy('episode','desc')->get();
  }
  public function getBeforeEpisode($episode,$anime){
    return $this->select('id')->where('anime',$anime)->where('episode',$episode-1)->first();
  }
  public function getAfterEpisode($episode,$anime){
    return $this->where('anime',$anime)->where('episode',$episode+1)->first();
  }
  public function tambahEpisode($data,$id){
    $this->user=Auth::user()->id;
    $this->anime=$id;
    $this->episode=$data->episode;
    $this->keterangan=$data->keterangan;
    $cover=$data->file('cover');
    if($cover!=null){
      $namafile=$data->episode.'_'.time().'.'.$cover->getClientOriginalExtension();
      $path=public_path().'/cover_episode/';
      $cover->move($path,$namafile);
      $this->cover=$namafile;
    }
    $this->save();

    return $this->id;
  }
  public function editEpisode($data,$id){
    $this->where('id',$id)->update([
      'episode' => $data->episode,
      'keterangan' => $data->keterangan,
    ]);
    $cover=$data->file('cover');
    if($cover!=null){
      $namafile=$data->episode.'_'.time().'.'.$cover->getClientOriginalExtension();
      $path=public_path().'/cover_episode/';
      $gambaryngdihapus=$this->select('cover')->where('id','=',$id)->get()->first()->cover;
      unlink($path.''.$gambaryngdihapus);
      $cover->move($path,$namafile);
      $this->where('id','=',$id)->update(
        ['cover'=>$namafile]
      );
    }
  }
  public function deleteEpisode($id){
    $episode=$this->select('episode','cover')->where('id',$id)->get()->first();
    $cover=$episode->cover;
    $episode=$episode->episode;
    $path=public_path().'/cover_episode/';
    unlink($path.''.$cover);
    $this->where('id',$id)->delete();
    return $episode;
  }
  public function getEpisodeSekarang($id){
    return $this->where('id',$id)->first();
  }

  public function getRekomendasi(){
    return $this->inRandomOrder()->limit(5)->get();
  }
}
