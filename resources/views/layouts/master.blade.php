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
            <i class="far fa-chart-bar" aria-hidden="true"></i> <span>Statistiques</span>
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
            <i class="fas fa-home" aria-hidden="true"></i>
            <span>Gestion Batiment</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('showBatiment')}}"><i class="fa fa-circle-o"></i>Afficher</a></li>
            <li><a href="{{route('afficheFormCreateBati')}}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
            <li><a href="{{route('showFormDeleteBatiment')}}"><i class="fa fa-circle-o"></i> Supprimer</a></li>
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
            <li><a href="{{route('showFormAjoutEtage')}}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
            <li><a href="{{route('showFormDeleteEtage')}}"><i class="fa fa-circle-o"></i> Supprimer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-bars"></i>
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
                <i class="far fa-calendar-alt"></i>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-plus"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li><a href="{{route('afficheFormCreateEvenement')}}">Nouvelle codification</a></li>
                      <!-- <li><a href="#">Fermer codification</a></li> -->
                    </ul>
                  </div>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-body
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
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
<!-- 



  
 -->