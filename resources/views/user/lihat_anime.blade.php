@extends('template.user')
@section('title','Anime')

@section('import_css')
<link rel="stylesheet" href="{{asset('css/preview_anime.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="container">
    <div class="preview-anime">
      <h5>{{$anime->judul}}</h5>
      <div class="row">
        <div class="col s12">
          <ul class="tabs ">
            <li class="tab col s2 hoverable"><a href="#about">Tentang Anime</a></li>
            <li class="tab col s2 hoverable"><a class="active" href="#view">Episode</a></li>
            <li class="tab col s2 hoverable"><a href="#download">Download Batch</a></li>
          </ul>
        </div>
        <div id="about" class="col s12">
          <div class="row">
            <div class="container">
              <div class="col s12 m4 l3">
                <div class="card sticky-action hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{asset('/cover_anime/')}}/{{$anime->cover}}" alt="">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Sinopsis<i class="material-icons right">more_vert</i></span>
                    <p>{{$anime->sinopsis}}</p>
                    <br>
                    <a href="#!"><div class="chip">Genre</div></a>

                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Full Synopsis<i class="material-icons right">close</i></span>
                    {{$anime->sinopsis}}
                  </div>
                  <div class="card-action white-text">
                    <a href="/lihat/anime/{{$episode[0]->id}}">Tonton Episode Terbaru (NEW EP.{{$episode[0]->episode}})</a>
                  </div>
                </div>
              </div>
              <div class="col s12 m7 l8" style="margin-left:1em;">
                <div class="card">
                  <div class="card-content" style="color:#ee6e73;">
                      <span class="card-title">Tentang Anime Ini</span>
                      <div class="col s12 m12 l5 hide-on-large-only" >
                        <table>
                          <thead>
                              <th>Judul Alternatif</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>English</td>
                              <td>{{$anime->judul_alternatif}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col s12 m12 l5" >
                        <table>
                          <thead>
                              <th>Informasi</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Type</td>
                              <td>{{$anime->type}}</td>
                            </tr>
                            <tr>
                              <td>Episodes</td>
                              <td>{{$anime->episode}}</td>
                            </tr>
                            <tr>
                              <td>Status</td>
                              <td>{{$anime->status}}</td>
                            </tr>
                            <tr>
                              <td>Aired</td>
                              <td>{{$anime->tanggal_tayang}}</td>
                            </tr>
                            <tr>
                              <td>Premiered</td>
                              <td>{{$anime->musim}}</td>
                            </tr>
                            <tr>
                              <td>Broadcast</td>
                              <td>{{$anime->broadcast}}</td>
                            </tr>
                            <tr>
                              <td>Producers</td>
                              <td>{{$anime->produser}}</td>
                            </tr>
                            <tr>
                              <td>Licensors</td>
                              <td>{{$anime->licensor}}</td>
                            </tr>
                            <tr>
                              <td>Studios</td>
                              <td>{{$anime->getStudio->nama_studio}}</td>
                            </tr>
                            <tr>
                              <td>Source</td>
                              <td>{{$anime->sumber}}</td>
                            </tr>
                            <tr>
                              <td>Duration</td>
                              <td>{{$anime->durasi}} min. per ep</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- <div class="col s12 m12 l5" >
                        <table>
                          <thead>
                            <th>Statistik MAL</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Rating</td>
                              <td>PG-13 - 13 Tahun Ke Atas</td>
                            </tr>
                            <tr>
                              <td>Score</td>
                              <td>8.341 (scored by 297,049 users)</td>
                            </tr>
                            <tr>
                              <td>Ranked</td>
                              <td>#2062</td>
                            </tr>
                            <tr>
                              <td>Popularity</td>
                              <td> #62</td>
                            </tr>
                            <tr>
                              <td>Members</td>
                              <td>517,060</td>
                            </tr>
                            <tr>
                              <td>Favorites</td>
                              <td>17,276</td>
                            </tr>
                          </tbody>
                        </table>
                      </div> -->

                      <table></table>
                  </div>
                  <div class="card-action white-text">
                    <a href="#">Tambahkan Ke Daftar Mengikuti</a>
                    <a href="#">Bagikan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="view" class="col s12">
          <div class="row">
            <div class="container">
              <div class="col m3 m3 hide-on-med-and-down" style="margin-right:1em;">
                <div class="card sticky-action hoverable">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{asset('/cover_anime/')}}/{{$anime->cover}}" alt="">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Sinopsis<i class="material-icons right">more_vert</i></span>
                    <p>{{$anime->sinopsis}}</p>
                    <br>
                    <a href="#!"><div class="chip">Genre</div></a>

                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Full Synopsis<i class="material-icons right">close</i></span>
                    {{$anime->sinopsis}}
                  </div>
                  <div class="card-action white-text">
                    <a href="/lihat/anime/{{$episode[0]->id}}">Tonton Episode Terbaru (NEW EP.{{$episode[0]->episode}})</a>
                  </div>
                </div>
              </div>
              <div class="col s12 m12 l8">
                <ul id="daftar-stream" class="collection with-header">
                  <li class="collection-header"><h4>Streaming {{$anime->judul}}</h4></li>
                  @foreach($episode as $i)
                  <li class="collection-item"><div>Episode {{$i->episode}}<a href="/lihat/anime/{{$i->id}}" class="secondary-content"><i class="material-icons">ondemand_video</i></a></div></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="download" class="col s12">
          <div class="row">
            <div class="container">
              <div class="col s12 m12 l5" style="margin-right:1em;">
                <ul id="daftar-download-batch" class="collection with-header">
                  <li class="collection-header"><h4>Download {{$anime->judul}}</h4></li>
                  @foreach($episode as $i)
                  <li class="collection-item"><div>Episode {{$i->episode}}<a href="/download/anime/{{$i->id}}" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  @endforeach
                </ul>
              </div>
              <!-- <div class="col s12 m12 l5">
                <ul id="daftar-single-link" class="collection with-header">
                  <li class="collection-header"><h4>Single Link K-Bagi</h4></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_480p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_720p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                </ul>
              </div>
              <div class="col s12 m12 l5">
                <ul id="daftar-single-link" class="collection with-header">
                  <li class="collection-header"><h4>Single Link G-Drive</h4></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_480p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_720p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                </ul>
              </div>
              <div class="col s12 m12 l5">
                <ul id="daftar-single-link" class="collection with-header">
                  <li class="collection-header"><h4>Single Link Mediafire</h4></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_480p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_720p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                  <li class="collection-item"><div>Sakurasou_No_Pet_No_Kanojo_360p<a href="#!" class="secondary-content"><i class="material-icons">archive</i></a></div></li>
                </ul>
              </div> -->
            </div>
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
