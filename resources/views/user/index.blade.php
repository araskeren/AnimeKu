@extends('template.user')
@section('title','Blank')

@section('import_css')
<link rel="stylesheet" href="{{asset('user/css/index.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
    <div class="row">
      <h5 style="margin-top:25px;">Direkomendasikan</h5>
      <ul>
        @foreach($direkomendasikan as $i)
        <li>
          <div class="col s6 m4 l3">
            <a href="/lihat/anime/{{$i->id}}">
              <div class="image">
                <img src="{!!asset('cover_episode/')!!}/{{$i->cover}}" alt="">
                <div class="episode">
                  Episode {{$i->episode}}
                </div>
                <div class="status">
                  {{substr($i->getanime->judul, 0, 13)}}
                  @if(strlen($i->getanime->judul)>13)
                  ...
                  @endif
                </div>
                <div class="season">{{$i->getanime->musim}} {{$i->getanime->created_at->year}}</div>
                <div class="is-watch">Sudah di tonton</div>
                <div class="play-button"><i class="material-icons large">play_circle_outline</i></div>
              </div>
            </a>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="row">
      <h5 style="margin-top:25px;">Baru Di Upload</h5>
      <ul>
        @foreach($newupload as $i)
        <li>
          <div class="col s6 m4 l3">
            <a href="/lihat/anime/{{$i->id}}">
              <div class="image">
                <img src="{!!asset('cover_episode/')!!}/{{$i->cover}}" alt="">
                <div class="episode">
                  Episode {{$i->episode}}
                </div>
                <div class="status">
                  {{substr($i->getanime->judul, 0, 13)}}
                  @if(strlen($i->getanime->judul)>13)
                  ...
                  @endif
                </div>
                <div class="season">{{$i->getanime->musim}}</div>
                <div class="is-watch">Sudah di tonton</div>
                <div class="play-button"><i class="material-icons large">play_circle_outline</i></div>
              </div>
            </a>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
    <ul id="anime_page_list" class="pagination">
      <?php
        if($_GET!=null){
          $current_page=$_GET['page'];
        }else{
          $current_page=1;
        }
        if($current_page%5==0&&$current_page>5){
          $mulai=$current_page;
        }else if($current_page<5){
          $mulai=1;
        }else{
          $mulai=$current_page%5;
          $mulai=$current_page-$mulai;
        }
       ?>
       @if($current_page==1)
       <li class="disabled"><a href="?page=1"><i class="material-icons">chevron_left</i></a></li>
       @else
       <li class="waves-effect"><a href="?page={{$current_page-1}}"><i class="material-icons">chevron_left</i></a></li>
       @endif
      <?php for($i=$mulai;$i<$mulai+5;$i++){ ?>
        @if($i==$current_page)
        <li class="active"><a href="?page={{$i}}">{{$i}}</a></li>
        @else
        <li class="waves-effect"><a href="?page={{$i}}">{{$i}}</a></li>
        @endif
      <?php } ?>
      <li class="waves-effect"><a href="?page={{$current_page+1}}"><i class="material-icons">chevron_right</i></a></li>
    </ul>

  </div>
</div>
@endsection

@section('import_script')

@endsection

@section('add_script')

@endsection
