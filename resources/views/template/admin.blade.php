<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>@yield('title')</title>

  <!-- Favicons-->
  <link rel="icon" href="{{asset('admin/images/favicon/favicon-32x32.png')}}" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{asset('admin/images/favicon/apple-touch-icon-152x152.png')}}">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="{{asset('admin/images/favicon/mstile-144x144.png')}}">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="{{asset('admin/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('admin/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->
  <link href="{{asset('admin/css/custom/custom-style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{asset('admin/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('admin/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  @yield('import_css')
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                  <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="{{asset('admin/images/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Anime</span></h1></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>

                </ul>
        </nav>
    </div>
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START LEFT SIDEBAR NAV-->
    <aside id="left-sidebar-nav">
      <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
          <div class="row">
              <div class="col col s4 m4 l4">
                  <img src="{{asset('admin/images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image">
              </div>
              <div class="col col s8 m8 l8">
                  <ul id="profile-dropdown" class="dropdown-content">
                      <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                      </li>
                      <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                      </li>
                      <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                      </li>
                      <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                      </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </ul>
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{Auth::user()->nama}}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                  <p class="user-roal">
                    @if(Auth::user()->level==1)
                    Administrator
                    @elseif(Auth::user()->level==2)
                    Moderator
                    @elseif(Auth::user()->level==3)
                    Premium User
                    @elseif(Auth::user()->level==4)
                    Free User
                    @endif
                  </p>
              </div>
          </div>
          </li>
          <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
          <li class="li-hover"><div class="divider"></div></li>
          <li class="bold"><a href="/admin/lihat/anime" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Anime</a></li>
          <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> User</a></li>
          <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Komentar</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
      </aside>
    <!-- END LEFT SIDEBAR NAV-->
    @yield('content')
  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('admin/js/plugins/jquery-1.11.2.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{asset('admin/js/materialize.js')}}"></script>
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
    <!--scrollbar-->
    <script type="text/javascript" src="{{asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{asset('admin/js/plugins/chartist-js/chartist.min.js')}}"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('admin/js/plugins.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('admin/js/custom-script.js')}}"></script>
    @yield('import_script')
    @yield('add_script')
</body>

</html>
