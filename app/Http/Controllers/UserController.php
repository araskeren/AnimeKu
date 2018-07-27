<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tambahUser(Request $request){
      $user = new User;
      if($request->isMethod('post')){
        $user->tambahUser($request);
      }
      $dataAllUser=$user->getAll();
      return view('admin.lihat_all_user',compact('dataAllUser'));
    }
    public function editUser($id,Request $request){
      $user=new User;
      if($request->isMethod('post')){
        $user->updateUser($id,$request);
      }
      $dataUser=$user->getData($id);
      $dataAllUser=$user->getAll();
      return view('admin.edit_user',compact('dataAllUser','dataUser'));
    }
    public function deleteUser($id){
      $user=new User;
      $nama=$user->deleteUser($id);
      return redirect()->back()->with('message', 'User '.$nama.' Berhasil Dihapus');
    }
}
