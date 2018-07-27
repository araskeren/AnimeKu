@extends('template.user')
@section('title')
{{$data->getanime->judul}} Ep. {{$data->episode}}
@endsection

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/view_vidio.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
  <div class="col s12 m12 l8">
    <div class="col s12 m12 l12">
    <div class="judul_anime">
      <h5>{{$data->getanime->judul}} Ep. {{$data->episode}}</h5>
    </div>
  </div>
    <div class="control_anime">
      @if($episodeBefore!=null)
      <div class="col s2 m2 l1 hide-on-small-and-down">
        <a href="/lihat/anime/{{$episodeBefore->id}}"><i class="medium material-icons">arrow_back</i></a>
      </div>
      @endif
      <select class="browser-default col s5 m3 l3 hide-on-small-and-down" style="margin-left:1em;height:2.5em;">
        @foreach($serverList as $i)
          <option download="{{$i->download}}" streaming="{{$i->streaming}}" >Server {{$i->server}}</option>
        @endforeach
      </select>
      <div class="col s5 m3 l3">
        <a class="waves-effect waves-light btn hide-on-small-and-down" style="margin-top:0;margin-left:1em;" href="/lihat/anime/detail/{{$data->getanime->id}}">Semua Episode</a>
      </div>
      <div class="col s2 m1 l1">
        <a class="btn-floating btn-large waves-effect waves-light hide-on-small-and-down" style="width:45px;height:40px;" href="#!"><i class="material-icons" style="line-height:42px;">archive</i></a>
      </div>
      <div class="col s2 m1 l1">
        <a class="btn-floating btn-large waves-effect waves-light hide-on-small-and-down" style="width:45px;height:40px;" href="#!"><i class="material-icons" style="line-height:42px;">refresh</i></a>
      </div>
      @if($episodeAfter!=null)
      <div class="col s2 m1 l1 hide-on-small-and-down">
        <a href="/lihat/anime/{{$episodeAfter->id}}"><i class="medium material-icons">arrow_forward</i></a>
      </div>
      @endif
    </div>
  <div class="col s12 m12 l11">
    <div class="vidio_anime">
      <div class="video-container">
        <IFRAME SRC="{{$serverList[0]->streaming}}" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=640 HEIGHT=360 allowfullscreen></IFRAME>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l11">
    <div id="hidden_control" class="control_anime hide-on-med-and-up">
      <div class="col s1">
        <a class="btn-floating btn waves-effect waves-light show-on-small" href="#!"><i class="material-icons">arrow_back</i></a>
      </div>
      <select class="browser-default col s4 show-on-small" style="margin-top:.5em;">
        @foreach($serverList as $i)
          <option download="{{$i->download}}" streaming="{{$i->streaming}}" >Server {{$i->server}}</option>
        @endforeach
      </select>
      <div class="col s4">
        <a class="waves-effect waves-light btn show-on-small">All Episode</a>
      </div>
      <div class="col s1">
        <a class="btn-floating btn waves-effect waves-light show-on-small" href="#!"><i class="material-icons">archive</i></a>
      </div>
      <div class="col s1">
        <a class="btn-floating btn waves-effect waves-light show-on-small" href="#!"><i class="material-icons">refresh</i></a>
      </div>
      <div class="col s1">
        <a class="btn-floating btn waves-effect waves-light show-on-small" href="#!"><i class="material-icons">arrow_forward</i></a>
      </div>
    </div>
  </div>
  <div class="komentar">
    <div class="col s12 m12 l11">
      <form class="" action="/tambah/komentar/" method="post">
        <input type="hidden" name="id_episode" value="{{$data->id}}">
        <div class="row">
            <div class="input-field col s12 m12 l12" style="max-width:95%;margin-left:1em;">
              <i class="material-icons prefix">account_circle</i>
              <textarea id="kolomkomentar" class="materialize-textarea" name="komentar"></textarea>
              <label for="kolomkomentar">Komentar</label>
            </div>
        </div>
        <div class="row">
          <div class="container" style="padding-top:0">
            {{csrf_field()}}
            <button type="submit" class="waves-effect waves-light blue btn">Komentar</button>
            <a class="waves-effect waves-light btn-flat">cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="list-komentar">
    <div class="col s12 m12 l11" style="margin-top:1em;">
      @foreach($komentar as $i)
      <div class="row">
        <div class="row valign-wrapper">
          <div class="col s1">
            <img src="{{asset('user/img/photo.jpg')}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
          </div>
          <div class="col s10">
            <b>{{$i->getuser->nama}}</b> <span> > {{$i->created_at}}</span>
            <br>
            <p class="black-text">
              {{$i->komentar}}
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>
  <div class="col s12 m12 l4">
    <div class="judul_anime">
      <h5>Berikutnya</h5>
      <div class="side-list">
        @if($episodeAfter!=null)
        <a href="/lihat/anime/{{$episodeAfter->id}}">
          <div class="row">
            <div class="col s6 m6 l6">
              <div class="vidio_side_anime">
                <div class="video-container">
                  <img src="{!!asset('cover_episode/')!!}/{{$episodeAfter->cover}}" alt="" width="211" height="118">
                </div>
              </div>
            </div>
            <div class="col s6 m6 l6">
              <div class="judul_side_anime">
                <div class="nama_anime">{{$episodeAfter->getanime->judul}} Ep {{$episodeAfter->episode}}</div>
                <div class="genre">
                </div>
              </div>
            </div>
          </div>
        </a>
        @endif
        <h5>Disarankan</h5>
        @foreach($direkomendasikan as $i)
        <a href="/lihat/anime/{{$i->id}}">
          <div class="row">
            <div class="col s6 m6 l6">
              <div class="vidio_side_anime">
                <div class="video-container">
                  <img src="{!!asset('cover_episode/')!!}/{{$i->cover}}" alt="" width="211" height="118">
                </div>
              </div>
            </div>
            <div class="col s6 m6 l6">
              <div class="judul_side_anime">
                <div class="nama_anime">{{$i->getanime->judul}} Ep {{$i->episode}}</div>
                <div class="genre">
                </div>
              </div>
            </div>
          </div>
        </a>
        @endforeach
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
