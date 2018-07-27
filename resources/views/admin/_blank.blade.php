@extends('template.admin')

@section('title','Blank')

@section('import_css')

@endsection

@section('content')
<!-- START WRAPPER -->
<div class="wrapper">

  <!-- START LEFT SIDEBAR NAV-->
  <aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
        <div class="row">
            <div class="col col s4 m4 l4">
                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
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
                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                    </li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
            </div>
        </div>
        </li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Anime</a></li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> User</a></li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Komentar</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
    </aside>
  <!-- END LEFT SIDEBAR NAV-->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START CONTENT -->
  <section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey hide-on-large-only">
            <i class="mdi-action-search active"></i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title">Blank Page</h5>
            <ol class="breadcrumbs">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->


    <!--start container-->
    <div class="container">
      <div class="section">
        <div class="row">
            <div class="col s12">
              <nav class="red">
                <div class="nav-wrapper">
                  <div class="left col s12 m5 l5">
                    <ul>
                      <li><a href="#!" class="email-menu"><i class="mdi-navigation-menu"></i></a>
                      </li>
                      <li><a href="#!" class="email-type">Primary</a>
                      </li>
                      <li class="right"><a href="#!"><i class="mdi-action-search"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="col s12 m7 l7 hide-on-med-and-down">
                    <ul class="right">
                      <li><a href="#!"><i class="mdi-content-archive"></i></a>
                      </li>
                      <li><a href="#!"><i class="mdi-action-delete"></i></a>
                      </li>
                      <li><a href="#!"><i class="mdi-content-mail"></i></a>
                      </li>
                      <li><a href="#!"><i class="mdi-navigation-more-vert"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col s12">
              konten disini
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

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START RIGHT SIDEBAR NAV-->
  <aside id="right-sidebar-nav">
    <ul id="chat-out" class="side-nav rightside-navigation">
        <li class="li-hover">
        <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
        <div id="right-search" class="row">
            <form class="col s12">
                <div class="input-field">
                    <i class="mdi-action-search prefix"></i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Search</label>
                </div>
            </form>
        </div>
        </li>
        <li class="li-hover">
            <ul class="chat-collapsible" data-collapsible="expandable">
            <li>
                <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                <div class="collapsible-body recent-activity">
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                        </div>
                        <div class="col s9 recent-activity-list-text">
                            <a href="#">just now</a>
                            <p>Jim Doe Purchased new equipments for zonal office.</p>
                        </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                        </div>
                        <div class="col s9 recent-activity-list-text">
                            <a href="#">Yesterday</a>
                            <p>Your Next flight for USA will be on 15th August 2015.</p>
                        </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                        </div>
                        <div class="col s9 recent-activity-list-text">
                            <a href="#">5 Days Ago</a>
                            <p>Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                        </div>
                        <div class="col s9 recent-activity-list-text">
                            <a href="#">Last Week</a>
                            <p>Jessy Jay open a new store at S.G Road.</p>
                        </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                        </div>
                        <div class="col s9 recent-activity-list-text">
                            <a href="#">5 Days Ago</a>
                            <p>Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                <div class="collapsible-body sales-repoart">
                    <div class="sales-repoart-list  chat-out-list row">
                        <div class="col s8">Target Salse</div>
                        <div class="col s4"><span id="sales-line-1"></span>
                        </div>
                    </div>
                    <div class="sales-repoart-list chat-out-list row">
                        <div class="col s8">Payment Due</div>
                        <div class="col s4"><span id="sales-bar-1"></span>
                        </div>
                    </div>
                    <div class="sales-repoart-list chat-out-list row">
                        <div class="col s8">Total Delivery</div>
                        <div class="col s4"><span id="sales-line-2"></span>
                        </div>
                    </div>
                    <div class="sales-repoart-list chat-out-list row">
                        <div class="col s8">Total Progress</div>
                        <div class="col s4"><span id="sales-bar-2"></span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                <div class="collapsible-body favorite-associates">
                    <div class="favorite-associate-list chat-out-list row">
                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                        </div>
                        <div class="col s8">
                            <p>Eileen Sideways</p>
                            <p class="place">Los Angeles, CA</p>
                        </div>
                    </div>
                    <div class="favorite-associate-list chat-out-list row">
                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                        </div>
                        <div class="col s8">
                            <p>Zaham Sindil</p>
                            <p class="place">San Francisco, CA</p>
                        </div>
                    </div>
                    <div class="favorite-associate-list chat-out-list row">
                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                        </div>
                        <div class="col s8">
                            <p>Renov Leongal</p>
                            <p class="place">Cebu City, Philippines</p>
                        </div>
                    </div>
                    <div class="favorite-associate-list chat-out-list row">
                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                        </div>
                        <div class="col s8">
                            <p>Weno Carasbong</p>
                            <p>Tokyo, Japan</p>
                        </div>
                    </div>
                    <div class="favorite-associate-list chat-out-list row">
                        <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                        </div>
                        <div class="col s8">
                            <p>Nusja Nawancali</p>
                            <p class="place">Bangkok, Thailand</p>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </li>
    </ul>
  </aside>
  <!-- LEFT RIGHT SIDEBAR NAV-->

</div>
<!-- END WRAPPER -->
@endsection

@section('import_script')

@endsection

@section('add_script')

@endsection
