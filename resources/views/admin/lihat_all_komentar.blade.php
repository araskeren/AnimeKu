@extends('template.admin')

@section('title','Blank')

@section('import_css')
<link href="{{asset('admin/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('content')
<!-- START WRAPPER -->
<div class="wrapper">
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
                  <div class="col s10">
                    <h4 class="left">Daftar Komentar</h4>
                  </div>
                  <div class="col s2">
                    <ul class="right">
                      <li><a href="#!"><i class="mdi-content-add-circle"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col s12">
              <div id="table-datatables">
                <h4 class="header">DataTables example</h4>
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="display" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Anime</th>
                              <th>Episode</th>
                              <th>User</th>
                              <th>Status</th>
                              <th>Komentar</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Sakurasou No Pet No Kanojo</td>
                              <td>2</td>
                              <td>Araskeren</td>
                              <td>Admin</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                              <td>
                                <form class="" action="#" method="post">
                                  <input type="hidden" name="id" value="">
                                  <button type="submit" name="tambah" value="1"><i class="mdi-editor-mode-edit small"></i></button>
                                  <button type="submit" name="tambah" value="1"><i class="mdi-action-delete small"></i></button>
                                </form>
                              </td>
                          </tr>
                          <tr>
                              <td>Sakurasou No Pet No Kanojo</td>
                              <td>2</td>
                              <td>Araskeren</td>
                              <td>Admin</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                              <td>
                                <form class="" action="#" method="post">
                                  <input type="hidden" name="id" value="">
                                  <button type="submit" name="tambah" value="1"><i class="mdi-editor-mode-edit small"></i></button>
                                  <button type="submit" name="tambah" value="1"><i class="mdi-action-delete small"></i></button>
                                </form>
                              </td>
                          </tr>
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
