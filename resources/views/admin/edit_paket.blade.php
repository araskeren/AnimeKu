@extends('template.admin')

@section('title','Blank')

@section('import_css')
<link href="{{asset('admin/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
<!-- START WRAPPER -->
<div class="wrapper">
  <!-- START CONTENT -->
  <section id="content">
    <!--start container-->
    <div class="container">
      <div class="section">
        <div class="row">
          @if(session()->has('message'))
              <div id="card-alert" class="card green">
                <div class="card-content white-text">
                  <p>INFO : {{ session()->get('message') }}</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
          @endif
            <div class="col s12">
              <nav class="red">
                <div class="nav-wrapper">
                  <div class="col s10">
                    <h4 class="left">Management Paket</h4>
                  </div>
                  <div class="col s2">
                    <ul class="right">
                      <li><a href="#add-user" class="modal-trigger"><i class="mdi-content-add-circle"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col s12 m4 l4">
                <h4>Tambah Paket</h4>
                <form class="" action="" method="post">
                  <div class="row">
                   <div class="input-field col s12">
                     <input id="nama" type="text" name="nama" value="{{$data->nama}}">
                     <label for="nama" class="">Nama Paket</label>
                   </div>
                  </div>
                  <div class="row">
                   <div class="input-field col s12">
                     <input id="fitur" type="text" name="fitur" value="{{$data->fitur}}">
                     <label for="fitur" class="">Fitur</label>
                   </div>
                  </div>
                  <div class="row">
                   <div class="input-field col s12">
                     <input id="masaaktif" type="number" name="masa_aktif" value="{{$data->masa_aktif}}">
                     <label for="masaaktif" class="">Masa Aktif</label>
                   </div>
                  </div>
                  <div class="row">
                   <div class="input-field col s12">
                     <input id="text" type="text" name="harga" value="{{$data->harga}}">
                     <label for="text" class="">Harga</label>
                   </div>
                 </div>
                  {{csrf_field()}}
                  <div class="row">
                   <div class="left">
                     <button class="waves-effect waves-light btn-large "><i class="mdi-content-add-circle right"></i>Edit Paket</button>
                   </div>
                 </div>
                </form>
            </div>
            <div class="col col s12 m8 l8">
              <h4>Daftar Paket</h4>
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="display" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Fitur</th>
                              <th>Masa Aktif</th>
                              <th>Harga</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if($paket!=null)
                        @foreach($paket as $i)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$i->nama}}</td>
                          <td>{{$i->fitur}}</td>
                          <td>{{$i->masa_aktif}}</td>
                          <td>{{$i->harga}}</td>
                          <td>
                            <a href="/admin/edit/paket/{{$i->id}}" class="modal-trigger"><button class="btn-floating btn-large waves-effect waves-light" type="submit" name="edit" value="1"><i class="mdi-editor-mode-edit small"></i></button></a>
                            <a href="/admin/delete/paket/{{$i->id}}" class="modal-trigger"><button class="btn-floating btn-large waves-effect waves-light" type="submit" name="delete" value="1"><i class="mdi-action-delete small"></i></button></a>
                          </td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- Floating Action Button -->
        <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="btn-floating btn-large">
              <i class="mdi-action-stars"></i>
            </a>
            <ul>
              <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
              <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
              <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
              <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
            </ul>
        </div>
        <!-- Floating Action Button -->
    </div>
    <!--end container-->
  </section>
  <!-- END CONTENT -->
</div>
<!-- END WRAPPER -->
<!-- start pop up -->
<div id="add-user" class="modal modal-fixed-footer" style="width:70%">
 <div class="modal-content">
   <h4>Tambah User</h4>
   <form class="" action="/admin/tambah/user" method="post">
     <div class="form-group">
      <div class="input-field col s6">
        <input id="nama" type="text" name="nama">
        <label for="nama" class="">Nama</label>
      </div>
     </div>
     <div class="form-group">
      <div class="input-field col s6">
        <input id="username" type="text" name="username">
        <label for="username" class="">Username</label>
      </div>
     </div>
     <div class="form-group">
      <div class="input-field col s6">
        <input id="email" type="email" name="email">
        <label for="email" class="">Email</label>
      </div>
     </div>
     <div class="form-group">
       <div class="input-field col s12">
         <input id="password" type="password" name="password">
         <label for="password" class="">Password</label>
       </div>
     </div>
     <div class="form-group">
       <select id="type-anime" name="role">
         <option value="" disabled selected>Pilih Role</option>
         <option value="1">Admin</option>
         <option value="2">Moderator</option>
         <option value="3">Premium-User</option>
         <option value="4">Free-User</option>
       </select>
     </div>
     {{csrf_field()}}
     <div class="row">
      <div class="left">
        <button class="waves-effect waves-light btn-large right"><i class="mdi-content-add-circle right"></i>Tambah User</button>
      </div>
    </div>
   </form>
 </div>
 <div class="modal-footer">
   <a href="#!" class="modal-action modal-close waves-effect waves-green btn red left">Batal</a>
 </div>
</div>
<!-- End Popup -->
@endsection

@section('import_script')
<!-- data-tables -->
<script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/data-tables-script.js')}}"></script>
<!-- chartist -->
<script type="text/javascript" src="{{asset('admin/js/plugins/chartist-js/chartist.min.js')}}"></script>
@endsection

@section('add_script')

@endsection
