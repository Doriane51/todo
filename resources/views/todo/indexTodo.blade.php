@extends('todo.template')
@section('content')
@section('content')
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <a href="{{route('read')}}" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">{{$tasks->count()}}</div>
              <div class="title">Total de vos tâches</div>
            </div>
            <!--/.info-box-->
          </a>
          <!--/.col-->

          <a href="{{route('read_terminer')}}" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">{{$tasks_terminer->count()}}</div>
              <div class="title">Total de vos tâches terminées</div>
            </div>
            <!--/.info-box-->
          </a>
          <a href="{{route('read_en_cours')}}" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">{{$tasks_en_cours->count()}}</div>
              <div class="title">Total des tâches en cours</div>
            </div>
            <!--/.info-box-->
          </a>
          <!--/.col-->
{{--

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Order</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Stock</div>
            </div>
            <!--/.info-box-->
          </div> --}}
          <!--/.col-->

        </div>
        <!--/.row-->



      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->

        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
@endsection



