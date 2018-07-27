<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password','username','level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tambahUser($data){
      $this->username=$data->username;
      $this->nama=$data->nama;
      $this->email=$data->email;
      $this->password=bcrypt($data->password);
      $this->level=$data->role;
      $this->save();
    }
    public function updateUser($id,$data){
      $user=$this->where('id',$id)->first();
      $user->update([
        'username'=>$data->username,
        'nama'=>$data->nama,
        'email'=>$data->email,
        'level'=>$data->role
      ]);
      if($data->password!=null){
        $user->update([
          'password'=>bcrypt($data->password)
        ]);
      }
    }
    public function deleteUser($id){
      $nama=$this->select('nama')->where('id',$id)->first()->nama;
      $this->where('id',$id)->delete();
      return $nama;
    }
    public function getData($id){
      return $this->where('id',$id)->first();
    }
    public function getAll(){
      return $this->get();
    }
}
