@extends('template.user')
@section('title','Blank')

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/top_anime.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
  <div class="judul">
    <div class="row">
      <div class="col s9 m12 l12 hide-on-med-and-up">
          <h5 style="margin-left:10px;">Top Anime</h5>
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
            <li class="active"><a href="browse_top_anime.html">Top Anime</a></li>
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
    <div id="data1" class="row">
      <table>
        <thead>
          <tr>
            <th id="rank">No</th>
            <th id="judul">JUDUL</th>
            <th id="ratting" class="hide-on-small-only">RATTING MAL</th>
            <th id="ratting" class="hide-on-small-only">MY RATTING</th>
            <th id="status">TONTON</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="rank">1</td>
            <td>
              <img class="gambar-anime" src="{{asset('user/img/2.jpg')}}" alt="">
              <div class="detial-anime">
                <a href="#" class="judul-anime">Sakurasou No Pet No Kanojo</a>
                <span>TV(64 Episode)</span>
                <span class="hide-on-small-only">Apr 2009 - Jul 2010</span>
                <span class="hide-on-small-only">Studio : Madhouse</span>
                <span class="hide-on-med-and-up">Ratting MAL : 9.7</span>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td>
              <a class="btn"><i class="material-icons">add</i></a>
            </td>
          </tr>
          <tr>
            <td class="rank">2</td>
            <td>
              <img class="gambar-anime" src="{{asset('user/img/2.jpg')}}" alt="">
              <div class="detial-anime">
                <a href="#" class="judul-anime">Sakurasou No Pet No Kanojo</a>
                <span>TV(64 Episode)</span>
                <span class="hide-on-small-only">Apr 2009 - Jul 2010</span>
                <span class="hide-on-small-only">Studio : Madhouse</span>
                <span class="hide-on-med-and-up">Ratting MAL : 9.7</span>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td>
              <a class="btn"><i class="material-icons">add</i></a>
            </td>
          </tr>
          <tr>
            <td class="rank">3</td>
            <td>
              <img class="gambar-anime" src="{{asset('user/img/2.jpg')}}" alt="">
              <div class="detial-anime">
                <a href="#" class="judul-anime">Sakurasou No Pet No Kanojo</a>
                <span>TV(64 Episode)</span>
                <span class="hide-on-small-only">Apr 2009 - Jul 2010</span>
                <span class="hide-on-small-only">Studio : Madhouse</span>
                <span class="hide-on-med-and-up">Ratting MAL : 9.7</span>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td>
              <a class="btn"><i class="material-icons">add</i></a>
            </td>
          </tr>
          <tr>
            <td class="rank">4</td>
            <td>
              <img class="gambar-anime" src="{{asset('user/img/2.jpg')}}" alt="">
              <div class="detial-anime">
                <a href="#" class="judul-anime">Sakurasou No Pet No Kanojo</a>
                <span>TV(64 Episode)</span>
                <span class="hide-on-small-only">Apr 2009 - Jul 2010</span>
                <span class="hide-on-small-only">Studio : Madhouse</span>
                <span class="show-on-small-only">Ratting MAL : 9.7</span>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td>
              <a class="btn"><i class="material-icons">add</i></a>
            </td>
          </tr>
          <tr>
            <td class="rank">5</td>
            <td>
              <img class="gambar-anime" src="{{asset('user/img/2.jpg')}}" alt="">
              <div class="detial-anime">
                <a href="#" class="judul-anime">Sakurasou No Pet No Kanojo</a>
                <span>TV(64 Episode)</span>
                <span class="hide-on-small-only">Apr 2009 - Jul 2010</span>
                <span class="hide-on-small-only">Studio : Madhouse</span>
                <span class="hide-on-med-and-up">Ratting MAL : 9.7</span>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td class="hide-on-small-only">
              <div class="ratting">
                <div class="icon">
                  <i class="material-icons hide-on-small-only">star</i>
                </div>
                <div class="number">
                  9.25
                </div>
              </div>
            </td>
            <td>
              <a class="btn"><i class="material-icons">add</i></a>
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
