@extends('template.user')
@section('title','Blank')

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/history.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
    <div class="filter hide-on-large-only">
      <div id="filter" class="col s12 m12 l4">
        <form id="sub-pencarian-anime" action="#">
          <div class="input-field" id="sub-cari-anime">
            <input id="sub-search" type="search" required="" onkeyup="getBlogs(this.value,0);" style="height" placeholder="Telusuri History Anime">
            <label class="label-icon" style="margin:0;" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div id="sub-searchResults"></div>
          </div>
          <p>
            <input name="group1" type="radio" id="HistoryTontonan" />
            <label for="HistoryTontonan">History Tontonan</label>
          </p>
          <p>
            <input name="group1" type="radio" id="HistoryPencarian" />
            <label for="HistoryPencarian">History Pencarian</label>
          </p>
          <p>
            <input class="with-gap" name="group1" type="radio" id="HistoryKomentar"  />
            <label for="HistoryKomentar">Komentar</label>
          </p>
        </form>

        <p>
          <a href="#">HAPUS SEMUA HISTORY TONTONAN</a>
        </p>
        <p>
          <a href="#">HENTIKAN SEMENTARA HISTORI TONTONAN</a>
        </p>
      </div>
    </div>
  <div class="kontent">
    <div class="list-anime">
      <div class="col s12 m12 l8">
        <ul>
          <li>
            <div class="row">
              <a href="#">
                <img src="{{asset('user/img/3.jpg')}}" alt="">
                <div class="detial">
                  <h5>One Piece #824</h5>
                  <span>3x DI TONTON</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </a>
            </div>
          </li>
          <li>
            <div class="row">
              <a href="#">
                <img src="{{asset('user/img/3.jpg')}}" alt="">
                <div class="detial">
                  <h5>One Piece #824</h5>
                  <span>3x DI TONTON</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </a>
            </div>
          </li>
          <li>
            <div class="row">
              <a href="#">
                <img src="{{asset('user/img/3.jpg')}}" alt="">
                <div class="detial">
                  <h5>One Piece #824</h5>
                  <span>3x DI TONTON</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </a>
            </div>
          </li>
          <li>
            <div class="row">
              <a href="#">
                <img src="{{asset('user/img/3.jpg')}}" alt="">
                <div class="detial">
                  <h5>One Piece #824</h5>
                  <span>3x DI TONTON</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </a>
            </div>
          </li>
          <li>
            <div class="row">
              <a href="#">
                <img src="{{asset('user/img/3.jpg')}}" alt="">
                <div class="detial">
                  <h5>One Piece #824</h5>
                  <span>3x DI TONTON</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </a>
            </div>
          </li>
          <li>
            <div class="row">
              <a href="#">
                <img src="{{asset('user/img/3.jpg')}}" alt="">
                <div class="detial">
                  <h5>One Piece #824</h5>
                  <span>3x DI TONTON</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="filter">
      <div id="filter-on-large" class="col s12 m12 l4 hide-on-med-and-down">
        <form id="sub-pencarian-anime" action="#">
          <div class="input-field" id="sub-cari-anime">
            <input id="search" type="search" required="" onkeyup="getBlogs(this.value,0);" style="height" placeholder="Telusuri History Anime">
            <label class="label-icon" style="margin:0;" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div id="sub-searchResults"></div>
          </div>
          <p>
            <input name="group1" type="radio" id="HistoryTontonan" />
            <label for="HistoryTontonan">History Tontonan</label>
          </p>
          <p>
            <input name="group1" type="radio" id="HistoryPencarian" />
            <label for="HistoryPencarian">History Pencarian</label>
          </p>
          <p>
            <input class="with-gap" name="group1" type="radio" id="HistoryKomentar"  />
            <label for="HistoryKomentar">Komentar</label>
          </p>
        </form>

        <p>
          <a href="#">HAPUS SEMUA HISTORY TONTONAN</a>
        </p>
        <p>
          <a href="#">HENTIKAN SEMENTARA HISTORI TONTONAN</a>
        </p>
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
