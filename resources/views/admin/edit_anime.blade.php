@extends('template.admin')

@section('title','Blank')

@section('import_css')

@endsection

@section('content')
<!-- START WRAPPER -->
<div class="wrapper">

  <!-- START LEFT SIDEBAR NAV-->
  <aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
        <div class="row">
            <div class="col col s4 m4 l4">
                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col col s8 m8 l8">
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                    </li>
                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                    </li>
                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                    </li>
                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                    </li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
            </div>
        </div>
        </li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Anime</a></li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> User</a></li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Komentar</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
    </aside>
  <!-- END LEFT SIDEBAR NAV-->

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
                  <div class="col s12">
                    <h4 class="left">Edit Anime <small class="hide-on-small-only">{{$anime->judul}}</small></h4>
                  </div>
                </div>
              </nav>
            </div>
            <form class="" action="" method="post" enctype="multipart/form-data">

            <div class="col s12 m6 l6">
              <h5>Informasi Dasar</h5>
              <div class="row">
                <div class="input-field col s12 m12 m12">
                  <input name="judul" id="judul-anime-edit-anime" type="text" value="{{$anime->judul}}">
                  <label for="judul-anime">Judul</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 m12">
                  <input name="genre" id="genre-anime-edit-anime" type="text" value="Comedy,Slice Of Life">
                  <label for="genre-anime">Genre</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                    <textarea name="sinopsis" id="sinopsis-edit-anime-selected" class="materialize-textarea" data-length="120">{{$anime->sinopsis}}</textarea>
                    <label for="textarea1">Sinopsis</label>
                </div>
              </div>
              <div class="row">
                <div class="file-field input-field">
                       <div class="btn">
                         <span>Cover Anime</span>
                         <input type="file" id="gambar-cover-edit-anime-selected" name="cover">
                       </div>
                       <div class="file-path-wrapper">
                         <input class="file-path validate" type="text">
                       </div>
                     </div>
              </div>
            </div>
            <div class="col s12 m6 l6">
              <h5>Informasi MAL</h5>
                <div class="form-group">
                   <div class="input-field col s12 m6 l6" style="margin-right:1em;">
                    <input name="judul_alternatif" id="judul-anime-alternatif-edit-anime-selected" type="text" value="{{$anime->judul_alternatif}}">
                    <label for="judul-anime-alternatif">Judul Alternatif</label>
                   </div>
                   <div class="input-field col s12 m5 l5">
                     <select name="studio_id" class="studio-anime" name="studio-anime">
                       @foreach($studio as $i)
                        @if($i->id==$anime->studio_id)
                          <option value="{{$i->id}}" selected>{{$i->nama_studio}}</option>
                        @else
                          <option value="{{$i->id}}">{{$i->nama_studio}}</option>
                        @endif
                       @endforeach
                     </select>
                    <label for="studio-anime">Studio</label>
                    </div>
                  </div>
                <div class="form-group">
                    <div class="input-field col s12 m5 l2" style="margin-right:1em;">
                     <input name="durasi" id="durasi-anime-edit-anime-selected" type="text" value="{{$anime->durasi}}">
                     <label for="durasi-anime">Durasi</label>
                    </div>
                    <div class="input-field col s12 m5 l2" style="margin-right:1em;">
                     <input name="episode" id="episode-anime-edit-anime-selected" type="text" value="{{$anime->episode}}">
                     <label for="episode-anime">Episode</label>
                    </div>
                    <div class="input-field col s12 m5 l3" style="margin-right:1em;">
                      <input name="tanggal_tayang" id="tanggal-tayang-edit-anime-selected" type="text" class="datepicker" value="{{$anime->tanggal_tayang}}">
                      <label for="tanggal-tayang">Tanggal Tayang:</label>
                    </div>
                    <div class="input-field col s12 m5 l3">
                      <input name="tanggal_end" id="tanggal-end-edit-anime-selected" type="text" class="datepicker" value="{{$anime->tanggal_end}}">
                      <label for="tanggal-end">Tanggal End:</label>
                    </div>
                  </div>
                <div class="form-group">
                   <div class="input-field col s12 m5 l2" style="margin-right:1em;">
                    <select name="type_anime" id="type-anime-edit-anime-selected">
                      <option value="" disabled selected>Pilih Type</option>
                      <option value="TV" selected>TV</option>
                    </select>
                    <label>Type:</label>
                  </div>
                   <div class="input-field col s12 m5 l2" style="margin-right:1em;">
                    <select name="sumber" id="sumber-adaptasi-edit-anime-selected">
                      @if($anime->sumber=='Manga')
                      <option value="Manga" selected>Manga</option>
                      <option value="Light Novel">Light Novel</option>
                      <option value="Original">Original</option>
                      @elseif($anime->sumber=='Light Novel')
                      <option value="Manga">Manga</option>
                      <option value="Light Novel" selected>Light Novel</option>
                      <option value="Original">Original</option>
                      @elseif($anime->sumber=='Original')
                      <option value="Manga">Manga</option>
                      <option value="Light Novel">Light Novel</option>
                      <option value="Original" selected>Original</option>
                      @else
                      <option value="Manga">Manga</option>
                      <option value="Light Novel">Light Novel</option>
                      <option value="Original">Original</option>
                      @endif
                    </select>
                    <label>Sumber:</label>
                   </div>
                   <div class="input-field col s12 m5 l3" style="margin-right:1em;">
                    <select name="musim" id="musim-anime-edit-anime-selected">
                      @if($anime->musim=='Winter')
                      <option value="Winter" selected>Winter</option>
                      <option value="Summer" >Summer</option>
                      <option value="Fall" >Fall</option>
                      <option value="Spring" >Spring</option>
                      @elseif($anime->musim=='Summer')
                      <option value="Winter" >Winter</option>
                      <option value="Summer" selected>Summer</option>
                      <option value="Fall" >Fall</option>
                      <option value="Spring" >Spring</option>
                      @elseif($anime->musim=='Fall')
                      <option value="Winter" >Winter</option>
                      <option value="Summer" >Summer</option>
                      <option value="Fall" selected>Fall</option>
                      <option value="Spring" >Spring</option>
                      @elseif($anime->musim=='Spring')
                      <option value="Winter" >Winter</option>
                      <option value="Summer" >Summer</option>
                      <option value="Fall" >Fall</option>
                      <option value="Spring" selected>Spring</option>
                      @else
                      <option value="Winter" >Winter</option>
                      <option value="Summer" >Summer</option>
                      <option value="Fall" >Fall</option>
                      <option value="Spring" >Spring</option>
                      @endif
                    </select>
                    <label>Musim:</label>
                    </div>
                    <div class="input-field col s12 m5 l3">
                     <select name="status" id="status-anime-edit-anime-selected">
                       <option value="" disabled selected>Pilih Status</option>
                       @if($anime->status=='Complete')
                       <option value="Complete" selected>Complete</option>
                       <option value="Ongoing" >Ongoing</option>
                       @elseif($anime->status=='Ongoing')
                       <option value="Complete" >Complete</option>
                       <option value="Ongoing" selected>Ongoing</option>
                       @else
                       <option value="Complete">Complete</option>
                       <option value="Ongoing">Ongoing</option>
                       @endif
                     </select>
                     <label>Status:</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m6 l4" style="margin-right:1em;">
                     <input name="produser" id="produser-anime-edit-anime-selected" type="text" value="{{$anime->produser}}">
                     <label for="produser-anime">Produser</label>
                    </div>

                    <div class="input-field col s12 m5 l3" style="margin-right:1em;">
                     <input name="licensor" id="licensor-anime-edit-anime-selected" type="text" value="{{$anime->licensor}}">
                     <label for="licensor-anime">Licensor</label>
                    </div>
                    <div class="input-field col s12 m5 l3">
                     <input name="broadcast" id="broadcacst-anime-edit-anime-selected" type="text" value="{{$anime->broadcast}}">
                     <label for="broadcacst-anime">Broadcast</label>
                    </div>
                  </div>
            </div>
            {{csrf_field()}}
              <button type="submit" class="right waves-effect waves-light btn-large" style="margin-right:1em;"><i class="mdi-content-add-circle right"></i>Simpan</button>
          </form>
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
      <form class="" action="" method="post">
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
        </div>
        <button type="submit" class="waves-effect waves-green btn" name="Tambah Anime">Tambah Anime</button>
      </form>
    </div>
   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn red">Batal</a>
   </div>
  </div>
  <!-- END POP UP -->


</div>
<!-- END WRAPPER -->
@endsection

@section('import_script')

@endsection

@section('add_script')

@endsection
