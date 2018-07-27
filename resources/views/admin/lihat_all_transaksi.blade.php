@extends('template.admin')

@section('title','Blank')

@section('import_css')
<link href="{{asset('admin/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
<!-- START WRAPPER -->
<div class="wrapper">
  <!-- START CONTENT -->
  <section id="content">
    <!--start container-->
    <div class="container">
      <div class="section">
        <div class="row">
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
            <div class="col col s12">
              <h4>Daftar Transaksi</h4>
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="display" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Paket</th>
                              <th>Masa Aktif</th>
                              <th>Status Pembayaran</th>
                              <th>Tanggal Konfirmasi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if($transaksi!=null)
                        @foreach($transaksi as $i)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$i->getUser->nama}}</td>
                            <td>{{$i->getPaket->nama}}</td>
                            <td>{{$i->getPaket->masa_aktif}}</td>
                            <td>
                              @if($i->status_pembayaran==1)
                              Sudah Terbayar
                              @else
                              <a href="/admin/transaksi/konfirmasi/{{$i->id}}">Konfirmasi Pembayaran</a>
                              @endif
                            </td>
                            <td>{{$i->tanggal_konfirmasi}}</td>
                          </tr>
                        @endforeach
                        @endif
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
