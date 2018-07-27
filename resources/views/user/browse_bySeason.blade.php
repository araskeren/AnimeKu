@extends('template.user')
@section('title','Blank')

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/by_season.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
  <div class="judul">
    <div class="row">
      <div class="col s9 m12 l12 hide-on-med-and-up">
          <h5 style="margin-left:10px;">Browse By Season</h5>
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
            <li><a href="browse_all.html">Lihat Semua</a></li>
            <li><a href="browse_top_anime.html">Top Anime</a></li>
            <li class="active"><a href="browse_by_season.html">By Season</a></li>
            <li><a href="browse_by_studio.html">By Studio</a></li>
          </ul>
          <!-- end sub nav -->
        </div>
      </nav>
    </div>
  </div>
  <div class="filter">
    <div class="row">
      <div class="col s12 m10 l5">
        <nav class="musim">
          <ul class="center">
            <li><a href="#">Upcoming</a></li>
            <li><a href="#" class="active">Winter 2017</a></li>
            <li><a href="#">Fall 2017</a></li>
            <li><a class="hide-on-small-only" href="#">Summer 2017</a></li>
            <li><a href="#">Lainnya</a></li>
          </ul>
        </nav>
      </div>
      <div class="sorting">
        <div class="input-field col s12 m2 l2" style="margin-top:0;">
          <select >
            <option value="" disabled selected>Urutkan :</option>
            <option value="1">Nama</option>
            <option value="3">Terbaru</option>
            <option value="3">Terlama</option>
            <option value="2">Paling Banyak</option>
            <option value="3">Paling Disukai</option>
            <option value="3">Paling Tidak Disukai</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="col s12 m12 l12">
      <div class="row">
        <h6>Daftar Anime Winter 2017</h6>
      </div>
      <div class="row">
        <ul class="daftar-anime">
          <li>
            <a href="#modal" class="block-anime modal-trigger">
              <img src="{{asset('user/img/2.jpg')}}" alt="">
              <span>Sakurasou No Pet No Kanojo</span>
            </a>
          </li>
          <li>
            <a href="#modal" class="block-anime modal-trigger">
              <img src="{{asset('user/img/2.jpg')}}" alt="">
              <span>Sakurasou No Pet No Kanojo</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  </div>
</div>
@endsection
@section('another_content')
<div id="modal" class="modal" style="width:400px;">
  <div class="modal-content">
    <h6>Sakurasou No Pet No Kanojo</h6>
    <select class="browser-default">
      <option value="" disabled selected>Silahkan Pilih</option>
      <option value="1">Sudah Di Tonton</option>
      <option value="2">Ingin Di Tonton</option>
      <option value="3">Sedang Mengikuti</option>
      <option value="4">Berhenti Menonton</option>
      <option value="5">Tidak Ingin Menonton</option>

    </select>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
  </div>
</div>
@endsection
@section('import_script')

@endsection

@section('add_script')
<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
    });
    $('.modal').modal({
    dismissible: true, // Modal can be dismissed by clicking outside of the modal
    opacity: .5, // Opacity of modal background
    inDuration: 300, // Transition in duration
    outDuration: 200, // Transition out duration
    startingTop: '4%', // Starting top style attribute
    endingTop: '10%', // Ending top style attribute
    ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      alert("Ready");
      console.log(modal, trigger);
    },
    complete: function() { alert('Closed'); } // Callback for Modal close
  }
);
</script>
@endsection
