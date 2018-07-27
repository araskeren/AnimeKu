<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
use App\Episode;
use App\ServerList;
use App\Komentar;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function HalamanUtama(){
      $episode=new Episode;
      $direkomendasikan=$episode->getRekomendasi();
      $newupload=$episode->orderBy('created_at','desc')->paginate(10);
      return view('user.index',compact('direkomendasikan','newupload'));
    }
    public function LihatAnime($id){
      $episode=new Episode;
      $server=new ServerList;
      $data=$episode->getEpisodeSekarang($id);
      $episodeAfter=$episode->getAfterEpisode($data->episode,$data->anime);
      $episodeBefore=$episode->getBeforeEpisode($data->episode,$data->anime);
      $direkomendasikan=$episode->getRekomendasi();
      $serverList=$server->getAllServer($id);
      $komentar=new Komentar;
      $komentar=$komentar->getKomentar($id);
      return view('user.view_anime',compact('data','serverList','komentar','episodeBefore','episodeAfter','direkomendasikan'));
    }
    public function TambahKomentar(Request $request){
      $komentar=new Komentar;
      $komentar->tambahKomentar(Auth::user()->id,$request);
      return redirect()->back()->with('message', 'Komentar Anda berhasil di tambahkan');
    }
    public function PreviewAnime($id){
      $anime=new Anime;
      $episode=new Episode;
      $anime=$anime->getAnime($id);
      $episode=$episode->getAllDesc($id);
      return view('user.lihat_anime',compact('anime','episode'));
    }
}
