@extends('template.admin')

@section('title','Lihat ALL Anime')

@section('import_css')
<link href="{{asset('admin/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
<!-- START WRAPPER -->
<div class="wrapper">
  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START CONTENT -->
  <section id="content">
    <!--start container-->
    <div class="container">
      <div class="section">
        <div class="row">
            <div class="col s12">
              <nav class="red">
                <div class="nav-wrapper">
                  <div class="col s10">
                    <h4 class="left">Daftar Anime</h4>
                  </div>

                  <div class="col s2">
                    <ul class="right">
                      <li><a href="#add-anime" class="modal-trigger"><i class="mdi-content-add-circle"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>

            <div class="col s12">
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
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
                    <table id="data-table-simple" class="display" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Judul</th>
                              <th>Studio</th>
                              <th>Musim</th>
                              <th>Episode</th>
                              <th>Status</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($anime as $i)
                        <tr>
                            <td>{{$i->judul}}</td>
                            <td>{{$i->studio_id}}</td>
                            <td>{{$i->musim}}</td>
                            <td>{{$i->episode}}</td>
                            <td>{{$i->status}}</td>
                            <td>
                                <a href="/admin/tambah/episode/{{$i->id}}" class="modal-trigger"><button class="btn-floating btn-large waves-effect waves-light" type="submit" name="tambah" value="1"><i class="mdi-av-my-library-add small"></i></button></a>
                                <a href="/admin/edit/anime/{{$i->id}}" class="modal-trigger"><button class="btn-floating btn-large waves-effect waves-light" type="submit" name="edit" value="1"><i class="mdi-editor-mode-edit small"></i></button></a>
                                <a href="/admin/delete/anime/{{$i->id}}" class="modal-trigger"><button class="btn-floating btn-large waves-effect waves-light" type="submit" name="delete" value="1"><i class="mdi-action-delete small"></i></button></a>
                            </td>
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
    <form class="" action="/admin/tambah/anime" method="post" enctype="multipart/form-data">
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
              <input id="judul-anime" type="text" value="" name="judul">
              <label for="judul-anime">Judul</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select id="genre" name="genre">
                <option value="" readonly selected>Pilih Genre</option>
                @foreach($genre as $i)
                <option value="{{$i->id}}">{{$i->genre}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" data-length="120" name="sinopsis"></textarea>
              <label for="textarea1">Sinopsis</label>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field">
              <div class="btn">
                <span>Cover Anime</span>
                <input type="file" name="cover">
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
                <input id="judul-anime-alternatif" type="text" name="judul_alternatif">
                <label for="judul-anime-alternatif">Judul Alternatif</label>
               </div>
               <div class="input-field col s12 m12 l6">
                 <select id="studio" name="studio">
                   <option value="" readonly selected>Pilih Studio</option>
                   @foreach($studio as $i)
                   <option value="{{$i->id}}">{{$i->nama_studio}}</option>
                   @endforeach
                 </select>
              </div>
              </div>
              <div class="row">
                <div class="input-field col s6 m6 l3">
                 <input id="durasi-anime" type="text" name="durasi">
                 <label for="durasi-anime">Durasi</label>
                </div>
                <div class="input-field col s6 m6 l3">
                 <input id="episode-anime" type="text" name="episode">
                 <label for="episode-anime">Episode</label>
                </div>
                <div class="input-field col s6 m6 l3" >
                  <input id="tanggal-tayang" type="text" class="datepicker" name="tanggal_tayang">
                  <label for="tanggal-tayang">Tanggal Tayang:</label>
                </div>
                <div class="input-field col s6 m6 l3">
                  <input id="tanggal-end" type="text" class="datepicker" name="tanggal_end">
                  <label for="tanggal-end">Tanggal End:</label>
                </div>
             </div>
             <div class="row">
               <div class="input-field col s6 m6 l3">
                <select id="type-anime" name="type_anime">
                  <option value="" disabled selected>Pilih Type</option>
                  <option value="TV">TV</option>
                </select>
                <label>Type:</label>
              </div>
               <div class="input-field col s6 m6 l3" >
                <select name="adaptasi">
                  <option value="" disabled selected>Pilih Adaptasi</option>
                  <option value="Manga">Manga</option>
                  <option value="Light Novel">Light Novel</option>
                </select>
                <label>Sumber:</label>
               </div>
               <div class="input-field col s6 m6 l3">
                <select id="musim-anime" name="musim">
                  <option value="" disabled selected>Musim</option>
                  <option value="Winter">Winter</option>
                  <option value="Summer">Summer</option>
                  <option value="Fall">Fall</option>
                  <option value="Spring">Spring</option>
                </select>
                <label>Type:</label>
                </div>
                <div class="input-field col s6 m6 l3">
                 <select id="status-anime" name="status">
                   <option value="" disabled selected>Pilih Status</option>
                   <option value="Complete">Complete</option>
                   <option value="Ongoing">Ongoing</option>
                 </select>
                 <label>Status:</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6 l4">
                 <input id="produser-anime" type="text" name="produser">
                 <label for="produser-anime">Produser</label>
                </div>
                <div class="input-field col s12 m6 l4">
                 <input id="licensor-anime" type="text" name="licensor">
                 <label for="licensor-anime">Licensor</label>
                </div>
                <div class="input-field col s12 m6 l4">
                 <input id="broadcacst-anime" type="text" name="broadcast">
                 <label for="broadcacst-anime">Broadcast</label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      {{csrf_field()}}
      <button type="submit" name="submit" class="right waves-effect waves-green btn pink">Simpan</button>
    </div>
   </div>
      <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn red">Batal</a>
   </div>
    </form>
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
