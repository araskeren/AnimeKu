<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
use App\Genre;
use App\Studio;
use Auth;
use Carbon\Carbon;
class AnimeController extends Controller
{
    public function lihatAllAnime(){
      $genre=new Genre;
      $genre=$genre->getAll();
      $studio=new Studio;
      $studio=$studio->getNamaStudio();
      $anime=new Anime;
      $anime=$anime->getAllAnime();
      return view('admin.lihat_all_anime',compact('genre','studio','anime'));
    }
    public function tambahAnime(Request $request){
      $anime=new Anime;
      if($request->tanggal_tayang!=null){
        $request->tanggal_tayang=Carbon::parse($request->tanggal_tayang)->todatestring();
      }
      if($request->tanggal_end!=null){
        $request->tanggal_end=Carbon::parse($request->tanggal_end)->todatestring();
      }
      $anime->tambahAnime($request,Auth::user()->id);
      return redirect()->back()->with('message', 'Anime '.$request->judul.' Berhasil Di Tambahkan');
    }
    public function editAnime(Request $request,$id){
      $anime=new Anime;
      if($request->isMethod('post')){
        $judul=$anime->editAnime($request,$id);
        return redirect('/admin/lihat/anime')->with('message', 'Anime '.$judul.' Berhasil Di Edit');
      }
      $anime=$anime->getAnime($id);
      $genre=new Genre;
      $genre=$genre->getAll();
      $studio=new Studio;
      $studio=$studio->getNamaStudio();
      // dd($anime);
      return view('admin.edit_anime',compact('anime','genre','studio'));
    }
    public function deleteAnime($id){
      $anime=new Anime;
      $judul=$anime->deleteAnime($id);
      return redirect()->back()->with('message', 'Anime '.$judul.' Berhasil Dihapus');
    }
}
