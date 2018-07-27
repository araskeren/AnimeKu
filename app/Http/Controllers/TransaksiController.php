<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Carbon\Carbon;
class TransaksiController extends Controller
{
    public function lihatTransaksi(Request $request){
      $transaksi= new Transaksi;
      $transaksi=$transaksi->getAll();
      return view('admin.lihat_all_transaksi',compact('transaksi'));
    }
    public function konfirmasi($id){
      $transaksi= new Transaksi;
      $data=$transaksi->konfirmasi($id,Carbon::now());
      return redirect()->back()->with('message', 'Transaksi '.$data->getUser->nama.' Dengan Paket '.$data->getPaket->nama.' Berhasil Dikonfirmasi');
    }
}
