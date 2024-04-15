
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{asset('admin/img/favicon.png')}}">

  <title>Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="{{asset('todo/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('todo/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('todo/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('todo/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('todo/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('todo/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('todo/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('todo/css/owl.carousel.css" type="text/css')}}">
  <link href="{{asset('todo/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('todo/css/fullcalendar.css')}}">
  <link href="{{asset('todo/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('todo/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('todo/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('todo/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('todo/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="route('indexAdmin')" class="logo">Task<span class="lite">Flow</span></a>
      <!--logo end-->

      


    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{route('indexTodo')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <li class="sub-menu">
            <a href="{{route('ajout')}}" class="">
            <img src="todo/img/add.png" alt="icone ajout" style="width:20px; height:20px;">
                <span>Ajouter une tâche</span>
            </a>
            <a href="{{route('read')}}" class="">
                <i class="icon_documents_alt"></i>
                <span>Toutes les tâches</span>
            </a>
            <a href="{{route('read_a_faire')}}" class="">
                <i class="icon_documents_alt"></i>
                <span>Tâches à faire</span>
            </a>
            <a href="{{route('read_en_cours')}}" class="">
                <i class="icon_documents_alt"></i>
                <span>Tâches en cours</span>
            </a>
            <a href="{{route('read_terminer')}}" class="">
                <i class="icon_documents_alt"></i>
                <span>Tâches terminées</span>
            </a>
            <a href="{{route('deconnexion')}}">
            <img src="todo/img/deco.png" alt="icone deconnexion" style="width:20px; height:20px;">
                <span>Deconnexion</span>
            </a>

          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
