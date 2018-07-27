<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
class PaketController extends Controller
{
    public function tambahPaket(Request $request){
      $paket=new Paket;
      if($request->isMethod('post')){
        $paket->tambahPaket($request);
      }
      $paket=$paket->getAll();
      return view('admin.lihat_all_paket',compact('paket'));
    }
    public function editPaket($id,Request $request){
      $paket=new Paket;
      if($request->isMethod('post')){
        $paket->editPaket($id,$request);
      }
      $data=$paket->getData($id);
      $paket=$paket->getAll();
      return view('admin.edit_paket',compact('data','paket'));
    }
    public function deletePaket($id){
      $paket=new Paket;
      $nama=$paket->deletePaket($id);
      return redirect()->back()->with('message', 'Paket '.$nama.' Berhasil Dihapus');
    }
}
