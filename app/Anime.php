<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Studio;
class Anime extends Model
{
    protected $table='anime';

    protected $fillable=[
      'user_id','judul','judul_alternatif','studio_id','durasi','episode','tanggal_tayang','tanggal_end','type','sumber','musim','status','produser','licensor','broadcast','sinopsis','cover',
    ];

    public function getStudio(){
      return $this->belongsTo(Studio::class,'studio_id');
    }

    public function tambahAnime($data,$id){

      $this->user_id=$id;
      $this->judul=$data->judul;
      $this->judul_alternatif=$data->judul_alternatif;
      $this->studio_id=$data->studio;
      $this->durasi=$data->durasi;
      $this->episode=$data->episode;
      $this->tanggal_tayang=$data->tanggal_tayang;
      $this->tanggal_end=$data->tanggal_end;
      $this->type=$data->type_anime;
      $this->sumber=$data->adaptasi;
      $this->musim=$data->musim;
      $this->status=$data->status;
      $this->produser=$data->produser;
      $this->licensor=$data->licensor;
      $this->broadcast=$data->broadcast;
      $this->sinopsis=$data->sinopsis;

      $cover=$data->file('cover');
      if($cover!=null){
        $namafile=$data->judul.'_'.time().'.'.$cover->getClientOriginalExtension();
        $path=public_path().'/cover_anime/';
        $cover->move($path,$namafile);
        $this->cover=$namafile;
      }
      $this->save();
    }
    public function editAnime($data,$id){
      $this->where('id',$id)->update([
        'judul'=>$data->judul,
        'judul_alternatif'=>$data->judul_alternatif,
        'studio_id'=>$data->studio,
        'durasi'=>$data->durasi,
        'episode'=>$data->episode,
        'tanggal_tayang'=>$data->tanggal_tayang,
        'tanggal_end'=>$data->tanggal_end,
        'type'=>$data->type_anime,
        'sumber'=>$data->adaptasi,
        'musim'=>$data->musim,
        'status'=>$data->status,
        'produser'=>$data->produser,
        'licensor'=>$data->licensor,
        'broadcast'=>$data->broadcast,
        'sinopsis'=>$data->sinopsis,
      ]);
      $cover=$data->file('cover');
      if($cover!=null){
        $namafile=$data->judul.'_'.time().'.'.$cover->getClientOriginalExtension();
        $path=public_path().'/cover_anime/';

        $gambaryngdihapus=$this->select('cover')->where('id','=',$id)->get()->first()->cover;
        if($gambaryngdihapus!=null){
          unlink($path.''.$gambaryngdihapus);
        }
        $cover->move($path,$namafile);
        $this->where('id','=',$id)->update(
          ['cover'=>$namafile]
        );
      }
      return $data->judul;
    }
    public function deleteAnime($id){
      $anime=$this->select('judul','cover')->where('id',$id)->get()->first();
      $judul=$anime->judul;
      $cover=$anime->cover;
      $path=public_path().'/cover_anime/';
      unlink($path.''.$cover);
      $this->where('id',$id)->delete();
      return $judul;
    }
    public function getAllAnime(){
      return $this->select('id','judul','studio_id','musim','episode','status')->get();
    }
    public function getAnime($id){
      return $this->where('id','=',$id)->get()->first();
    }
    public function getJudul($id){
      return $this->select('judul')->where('id',$id)->first()->judul;
    }
}
