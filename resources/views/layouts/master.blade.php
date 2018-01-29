<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ESP | Codification</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Font -->
 <!--  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-lg">
          <img src="{{asset('images/logo_coud.png')}}" style="width: 160px;" class="img-circle" alt="Image COUD">
        </span>
      <!-- logo for regular state and mobile devices -->
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle"  data-toggle="dropdown">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                <!-- <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p> -->
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                    
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            @lang('Déconnexion')
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    
                  <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="{{asset('images/logo_coud.png')}}" style="width: 90px;" class="img-circle" alt="Image COUD">
                </div>
              </div>
            <!-- <a href="#" data-toggle="control-sidebar">lo<i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <span class="logo-lg"><b>ESP_CODIFICATION</b></span>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Administration</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Statistiques</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o active"></i> Taux d'occupat/Batiment</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Gestion Batiment</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('showBatiment')}}"><i class="fa fa-circle-o"></i>Afficher</a></li>
            <li><a href="{{route('afficheFormCreateBati')}}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Supprimer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Gestion Etage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Ajouter</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Supprimer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-ils"></i>
            <span>Gestion Couloir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Ajouter</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Supprimer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bed"></i> <span>Gestion Chambre</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Ajouter</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Supprimer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Gestion Position</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Supprimer</a></li>
          </ul>
        </li>
        <!-- Calendrier génial -->
        <li class="row">
          <section class="col-lg-5 connectedSortable ui-sortable">
            <!-- Calendar -->
            <div class="box box-solid bg-blue-gradient">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-calendar"></i>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li><a href="{{route('afficheFormCreateEvenement')}}">Nouveau Evenement</a></li>
                      <li><a href="#">Suppr Evenement</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding" style="">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">Janvier 2018</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1514678400000">31</td><td class="day" data-date="1514764800000">1</td><td class="day" data-date="1514851200000">2</td><td class="day" data-date="1514937600000">3</td><td class="day" data-date="1515024000000">4</td><td class="day" data-date="1515110400000">5</td><td class="day" data-date="1515196800000">6</td></tr><tr><td class="day" data-date="1515283200000">7</td><td class="day" data-date="1515369600000">8</td><td class="day" data-date="1515456000000">9</td><td class="day" data-date="1515542400000">10</td><td class="day" data-date="1515628800000">11</td><td class="day" data-date="1515715200000">12</td><td class="day" data-date="1515801600000">13</td></tr><tr><td class="day" data-date="1515888000000">14</td><td class="day" data-date="1515974400000">15</td><td class="day" data-date="1516060800000">16</td><td class="day" data-date="1516147200000">17</td><td class="day" data-date="1516233600000">18</td><td class="day" data-date="1516320000000">19</td><td class="day" data-date="1516406400000">20</td></tr><tr><td class="day" data-date="1516492800000">21</td><td class="day" data-date="1516579200000">22</td><td class="day" data-date="1516665600000">23</td><td class="day" data-date="1516752000000">24</td><td class="day" data-date="1516838400000">25</td><td class="day" data-date="1516924800000">26</td><td class="day" data-date="1517011200000">27</td></tr><tr><td class="day" data-date="1517097600000">28</td><td class="day" data-date="1517184000000">29</td><td class="day" data-date="1517270400000">30</td><td class="day" data-date="1517356800000">31</td><td class="new day" data-date="1517443200000">1</td><td class="new day" data-date="1517529600000">2</td><td class="new day" data-date="1517616000000">3</td></tr><tr><td class="new day" data-date="1517702400000">4</td><td class="new day" data-date="1517788800000">5</td><td class="new day" data-date="1517875200000">6</td><td class="new day" data-date="1517961600000">7</td><td class="new day" data-date="1518048000000">8</td><td class="new day" data-date="1518134400000">9</td><td class="new day" data-date="1518220800000">10</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2018</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month focused">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year focused">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade focused">2010</span><span class="decade">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
              </div>
              <!-- /.box-body -->
          </section>
           
<!-- Fin calendrier -->
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    @yield('content')
  </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>version</b> 1.0
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="#">Haidara Karara</a>.</strong> All rights
      reserved.
    </footer>
</div>
  <!-- ./wrapper -->

  <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
<!-- 



  
 -->