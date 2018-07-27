@extends('template.user')
@section('title','Blank')

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/browse_anime.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
  <div class="judul">
    <div class="row">
      <div class="col s9 m12 l12">
          <h5 style="margin-left:10px;">Lihat Semua Anime</h5>
      </div>
      <div class="col s2 hide-on-med-and-up" style="padding-top:10px;">
        <a class='dropdown-button btn show-on-small-only' href='#' data-activates='dropdown1'><i class="material-icons">list</i></a></a>
      </div>
      <!-- sub nav -->
      <ul id='dropdown1' class='dropdown-content' style="z-index: 99;">
        <li><a href="browse_all.html">Lihat Semua</a></li>
        <li><a href="browse_top_anime.html">Top Anime</a></li>
        <li><a href="browse_by_season.html">Berdasarakan Musim</a></li>
        <li><a href="browse_by_studio.html">Berdasarkan Studio</a></li>
      </ul>
      <!-- end sub nav -->
    </div>
  </div>
  <div class="menu hide-on-small-only">
    <div class="row">
      <nav class="nav-wrapper">
        <div class="nav-wrapper">
          <!-- sub nav -->
          <ul class="left">
            <li class="active"><a href="browse_all.html">Lihat Semua</a></li>
            <li><a href="browse_top_anime.html">Top Anime</a></li>
            <li><a href="browse_by_season.html">By Season</a></li>
            <li><a href="browse_by_studio.html">By Studio</a></li>
          </ul>
          <!-- end sub nav -->
        </div>
      </nav>
    </div>
  </div>
  <div class="filter">
    <div class="row">

    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
      <div class="col s6 m3 l2">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('user/img/2.jpg')}}">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Sakurasou No Pet No Kanojo<i class="material-icons right">more_vert</i></span>
            <p><a href="#">Tambah Ke Daftar</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sinopsis<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
            <a href="#!"><div class="chip">Genre</div></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection

@section('import_script')

@endsection

@section('add_script')

@endsection
