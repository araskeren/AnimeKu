<!DOCTYPE html>
  <html>
    <head>
      <title>@yield('title')</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
      <link rel="stylesheet" href="{!!asset('user/css/master.css')!!}">
      @yield('import_css')
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- Navigasi -->
      <nav style="position:fixed;z-index: 99;">
      <div class="nav-wrapper">
        <a id="togle-menu" href="#" data-activates="slide-out" class="button-collapse"><i class="large material-icons">menu</i></a>
        <a id="brand" href="/" class="brand-logo hide-on-small-only">Streaming Anime</a>

        <ul class="right">
          @if(Auth::check())
          @if(Auth::user()->level==1)
          <li><a href="#"><i class="material-icons hide-on-small-only">file_upload</i></a></li>
          <li><a href="/admin/lihat/anime"><i class="material-icons hide-on-small-only">dashboard</i></a></li>
          <li><a href="#"><i class="medium material-icons hide-on-small-only">notifications</i></a></li>
          @endif
          @endif
          <li><a class="dropdown-button" data-activates="profile"><i class="medium material-icons">account_circle</i></a></li>
        </ul>
        <form id="pencarian-anime" >
        <div class="input-field">
          <input id="search" type="search" required onkeyup="getBlogs(this.value,0);"style="height">
          <label class="label-icon" style="margin:0;" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          <div id="searchResults" ></div>
        </div>
      </form>
        <!-- Dropdown Structure -->
        @if(Auth::check())
        <ul id="profile" class="dropdown-content collection">
            <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
                <h6>{{Auth::user()->nama}}</h6>
                @if(Auth::user()->level==1)
                <p>Admin</p>
                @elseif(Auth::user()->level==2)
                <p>Moderator</p>
                @elseif(Auth::user()->level==3)
                <p>Premium User</p>
                @elseif(Auth::user()->level==4)
                <p>Free User</p>
                @endif
            </li>
            <li class="divider"></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="material-icons">lock_outline</i>Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <li class="divider"></li>
            <li><a href="#!"><i class="material-icons">settings</i>Pengaturan</a></li>
            <li><a href="#!"><i class="material-icons">help_outline</i>Bantuan</a></li>
            <li><a href="#!"><i class="material-icons">message</i>Kirim Masukan</a></li>
        </ul>
        @else
        <ul id="profile" class="dropdown-content collection">
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Daftar</a></li>
        </ul>
        @endif
      </div>
      </nav>
      <!-- end navigasi -->
      <!--Import jQuery before materialize.js-->
      <!-- Nav Menu -->
      <ul id="slide-out" class="side-nav fixed" style="overflow-y: scroll;">
        <br>
        <li><a href="/"><i class="material-icons">home</i>Halaman Utama</a></li>
        <li><a href="#!"><i class="material-icons">whatshot</i>Anime Populer</a></li>
        <li><a href="#!"><i class="material-icons">youtube_searched_for</i>Browse Anime</a></li>
        <li><a href="#!"><i class="material-icons">subscriptions</i>Anime Yang Di Ikuti</a></li>
        <li><a href="#!"><i class="material-icons">star</i>Top Anime</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Koleksi</a></li>
        <li><a href="#!"><i class="material-icons">history</i>History</a></li>
        <li><a href="#!"><i class="material-icons">watch_later</i>Tonton Nanti</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Anime Yang Di Ikuti</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><a href="#!"><i class="material-icons"></i>Overlord</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#!"><i class="material-icons">settings</i>Pengaturan</a></li>
        <li><a href="#!"><i class="material-icons">message</i>Kirim Masukan</a></li>
        <li><a href="#!"><i class="material-icons">help_outline</i>Bantuan</a></li>

      </ul>
      <main>
        @yield('content')
      </main>
      @yield('another_content')
      <!-- End Nav Menu -->
      <!-- Script -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{!!asset('user/js/materialize.js')!!}"></script>
      @yield('import_script')
      <script type="text/javascript">
      $('.button-main').sideNav('hide');
      $('.button-collapse').sideNav({
          menuWidth: 300, // Default is 300
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true, // Choose whether you can drag to open on touch screens,
          onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
          onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
        }
      );
      $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'right', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
        }
      );
      </script>
      @yield('add_script')
    </body>
  </html>
