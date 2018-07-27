@extends('template.user')
@section('title','Blank')

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/by_studio.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
  <div class="judul">
    <div class="row">
      <div class="col s9 m12 l12 hide-on-med-and-up">
          <h5 style="margin-left:10px;">Browse By Studio</h5>
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
            <li><a href="browse_by_season.html">By Season</a></li>
            <li class="active"><a href="browse_by_studio.html">By Studio</a></li>
          </ul>
          <!-- end sub nav -->
        </div>
      </nav>
    </div>
  </div>
  <div class="filter">
    <div class="row">
      <div class="input-field col s12 m6 l3">
        <select>
          <option value="" disabled selected>Urutkan Berdasarkan :</option>
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

  <div class="content">
    <div id="data1" class="row">
      <table>
        <thead>
          <tr>
            <th id="judul">Nama Studio</th>
            <th id="status">Daftar Anime</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="studio">
              <a class="nama" href="#">J.C Staff</a></div>
              <span>567 anime</span>
              <div class="rate">
                <a href="#!"><i class="material-icons">favorite</i>300 Suka</a>
                <a href="#!"><i class="material-icons">favorite_border</i>300 Tidak Suka</a>
              </div>
            </td>
            <td class="list-anime">
              <ul>
                <li>
                  <a class="block-anime" href="#!">
                      <img src="{{asset('user/img/2.jpg')}}" alt="">
                      <span>Sakurasou No Pet No Kanojo</span>
                  </a>
                </li>
                <li>
                  <a class="block-anime" href="#!">
                      <img src="{{asset('user/img/2.jpg')}}" alt="">
                      <span>Sakurasou No Pet No Kanojo</span>
                  </a>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td class="studio">
              <a class="nama" href="#">J.C Staff</a></div>
              <span>567 anime</span>
              <div class="rate">
                <a href="#!"><i class="material-icons">favorite</i>300 Suka</a>
                <a href="#!"><i class="material-icons">favorite_border</i>300 Tidak Suka</a>
              </div>
            </td>
            <td class="list-anime">
              <ul>
                <li>
                  <a class="block-anime" href="#!">
                      <img src="{{asset('user/img/2.jpg')}}" alt="">
                      <span>Sakurasou No Pet No Kanojo</span>
                  </a>
                </li>
                <li>
                  <a class="block-anime" href="#!">
                      <img src="{{asset('user/img/2.jpg')}}" alt="">
                      <span>Sakurasou No Pet No Kanojo</span>
                  </a>
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  </div>
</div>
@endsection

@section('import_script')

@endsection

@section('add_script')

@endsection
