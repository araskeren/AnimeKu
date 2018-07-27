@extends('template.admin')

@section('title','Edit | Episode')

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
            <div class="col s12">
              <nav class="red">
                <div class="nav-wrapper">
                  <div class="col s12">
                    <h4 class="left">Edit Episode <small class="hide-on-small-only">{{$judul}}</small></h4>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col s12 m6 l6">
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
              <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="input-field col s12 m4 l4">
                    <input name="episode" id="episode" type="number" class="validate" value="{{$epSekarang->episode}}">
                    <label for="episode">Episode</label>
                  </div>
                  <div class="col s12 m8 l8">
                    <div class="file-field input-field">
                        <div class="btn">
                          <span>Cover Episode</span>
                          <input name="cover" type="file" id="gambar-cover-edit-anime-selected">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m4 l4">
                     <input name="stream[]" id="server1" type="text" class="validate" placeholder="http://" value="{{$server[0]->streaming}}">
                     <label for="serverStream1">Link Streaming Server 1</label>
                  </div>
                  <div class="input-field col s12 m4 l4">
                   <input name="stream[]" id="server2" type="text" class="validate" placeholder="http://" value="{{$server[1]->streaming}}">
                   <label for="serverStream2">Link Streaming Server 2</label>
                  </div>
                  <div class="input-field col s12 m4 l4">
                    <input name="stream[]" id="server3" type="text" class="validate" placeholder="http://" value="{{$server[2]->streaming}}">
                    <label for="serverStream3">Link Streaming Server 3</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m4 l4">
                     <input name="download[]" id="serverDL1" type="text" class="validate" placeholder="http://" value="{{$server[0]->download}}">
                     <label for="serverDL1">Link Download Server 1</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                     <input name="download[]"id="serverDL2" type="text" class="validate" placeholder="http://" value="{{$server[1]->download}}">
                     <label for="serverDL2">Link Download Server 2</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                     <input name="download[]" id="serverDL3" type="text" class="validate" placeholder="http://" value="{{$server[2]->download}}">
                     <label for="serverDL3">Link Download Server 3</label>
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea name="keterangan" id="textarea1" class="materialize-textarea" data-length="120">{{$epSekarang->keterangan}}</textarea>
                    <label for="textarea1">Keterangan Episode</label>
                  </div>
                </div>
                {{csrf_field()}}
                <button type="submit" class="waves-effect waves-light btn-large "><i class="mdi-content-add-circle right"></i>Simpan Episode</button>
              </form>
            </div>
            <div class="divider"></div>
            <div class="col s12 m6 l6">
              <h5>Daftar Episode</h5>
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="display" cellspacing="0">
                      <thead>
                          <tr>
                              <th width="10px">Ep</th>
                              <th>Sinopsis</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($dataEp as $i)
                          <tr>
                            <td width="10px">{{$i->episode}}</td>
                            <td>{{substr($i->keterangan, 0,150)}}</td>
                            <td>
                              <a href="/admin/edit/episode/{{$i->id}}" class="modal-trigger"><button class="btn-floating btn-large waves-effect waves-light" type="submit" name="edit" value="1"><i class="mdi-editor-mode-edit small"></i></button></a>
                          </tr>
                        @endforeach
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
  <!-- POP UP -->
  <div id="add-anime" class="modal modal-fixed-footer" style="width:90%">
   <div class="modal-content">
     <h4>Tambah Anime</h4>
     <div class="row">
      <div class="col s12">
        <ul class="tabs tab-demo-active pink accent-2">
          <li class="tab col s6"><a href="#info-basic-add-anime" class="white-text waves-effect waves-light active">Informasi Dasar</a></li>
          <li class="tab col s6"><a href="#info-lanjut-add-anime" class="white-text waves-effect waves-light ">Informasi Lanjut</a></li>
        </ul>
      </div>
      <div id="info-basic-add-anime" class="col s12 m12 l12">
        <div class="row">
          <div class="row">
            <div class="input-field col s12">
              <input id="judul-anime" type="text" value="">
              <label for="judul-anime">Judul</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="genre" type="text" value="">
              <label for="genre">Genre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
              <label for="textarea1">Sinopsis</label>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field">
              <div class="btn">
                <span>Cover Anime</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="info-mal-add-anime" class="col s12">
        <form class="" action="index.html" method="post">
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="row">
               <div class="input-field col s12 m12 l6">
                <input id="judul-anime-alternatif" type="text">
                <label for="judul-anime-alternatif">Judul Alternatif</label>
               </div>
               <div class="input-field col s12 m12 l6">
                <input id="studio-anime" type="text">
                <label for="studio-anime">Studio</label>
              </div>
              </div>
              <div class="row">
                <div class="input-field col s6 m6 l3">
                 <input id="durasi-anime" type="text">
                 <label for="durasi-anime">Durasi</label>
                </div>
                <div class="input-field col s6 m6 l3">
                 <input id="episode-anime" type="text">
                 <label for="episode-anime">Episode</label>
                </div>
                <div class="input-field col s6 m6 l3">
                  <input id="tanggal-tayang" type="text" class="datepicker">
                  <label for="tanggal-tayang">Tanggal Tayang:</label>
                </div>
                <div class="input-field col s6 m6 l3">
                  <input id="tanggal-end" type="text" class="datepicker">
                  <label for="tanggal-end">Tanggal End:</label>
                </div>
             </div>
             <div class="row">
               <div class="input-field col s6 m6 l3">
                <select id="type-anime">
                  <option value="" disabled selected>Pilih Type</option>
                  <option value="TV">TV</option>
                </select>
                <label>Type:</label>
              </div>
               <div class="input-field col s6 m6 l3">
                <select>
                  <option value="" disabled selected>Pilih Status</option>
                  <option value="Manga">Manga</option>
                  <option value="Light Novel">Light Novel</option>
                </select>
                <label>Sumber:</label>
               </div>
               <div class="input-field col s6 m6 l3">
                <select id="musim-anime">
                  <option value="" disabled selected>Musim</option>
                  <option value="Winter">Winter</option>
                  <option value="Summer">Summer</option>
                  <option value="Fall">Fall</option>
                  <option value="Spring">Spring</option>
                </select>
                <label>Type:</label>
                </div>
                <div class="input-field col s6 m6 l3">
                 <select id="status-anime">
                   <option value="" disabled selected>Pilih Status</option>
                   <option value="Complete">Complete</option>
                   <option value="Ongoing">Ongoing</option>
                 </select>
                 <label>Status:</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6 l4">
                 <input id="produser-anime" type="text">
                 <label for="produser-anime">Produser</label>
                </div>
                <div class="input-field col s12 m6 l4">
                 <input id="licensor-anime" type="text">
                 <label for="licensor-anime">Licensor</label>
                </div>
                <div class="input-field col s12 m6 l4">
                 <input id="broadcacst-anime" type="text">
                 <label for="broadcacst-anime">Broadcast</label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn" style="margin-left:1em;">Simpan</a>
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn red">Batal</a>
   </div>
  </div>
  <!-- END POP UP -->
</div>
<!-- END WRAPPER -->
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
