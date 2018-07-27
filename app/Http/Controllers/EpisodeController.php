<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
use App\Episode;
use App\ServerList;
class EpisodeController extends Controller
{
    public function tambahEpisode(Request $request,$id){
      $episode = new Episode;
      $anime=new Anime;
      if($request->isMethod('post')){
        $lastEp=$episode->tambahEpisode($request,$id);
        $ServerList=new ServerList;
        $ServerList->tambahServer($request,$lastEp);
      }
      $judul=$anime->getJudul($id);
      $dataEp = $episode->getAll($id);

      if(count($dataEp)==0){
        $episodeSekarang=1;
      }else{
        $episodeSekarang=count($dataEp)+1;
      }
      return view('admin.tambah_episode',compact('judul','dataEp','episodeSekarang'));
    }
    public function editEpisode(Request $request,$id){
      $episode = new Episode;
      $anime=new Anime;
      $ServerList=new ServerList;
      if($request->isMethod('post')){
        $ServerList->editServer($request,$id);
        $episode->editEpisode($request,$id);
      }
      $epSekarang= $episode->getEpisodeSekarang($id);
      $dataEp = $episode->getAll($epSekarang->anime);
      $judul=$anime->getJudul($epSekarang->anime);
      $server=$ServerList->getAllServer($id);
      return view('admin.edit_episode',compact('judul','dataEp','epSekarang','server'));
    }
    public function deleteEpisode($id){
      $episode = new Episode;
      $episode=$episode->deleteEpisode($id);

      return redirect()->back()->with('message', 'Episode '.$episode.' Berhasil Dihapus');
    }
}
