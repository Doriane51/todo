@extends('todo.template')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">  
        <div class="alert alert-success" role="alert" style="padding:50px 10px 50px;">
            @if(session()->has('statut'))
              <p style="text-align:center; color:black; font-size:20px;">{{session()->get('statut')}}</p>
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h3 class="page-header"><i class="fa fa fa-bars"></i> Ajouter une nouvelle tâche</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
            <li><i class="fa fa-bars"></i>Pages</li>
            <li><i class="fa fa-square-o"></i>Ajouter une nouvelle tâche</li>
          </ol>
          
        </div>
      </div>
      <!-- page start-->
     
<div class="panel-body" style="margin:0 auto; width:60%">
    <div class="form">
      <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('ajoutPost')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group ">
          <label for="cname" class="control-label col-lg-3">Titre de la tâche<span class="required">*</span></label>
          <div class="col-lg-9">
            <input class="form-control" id="ctitre" name="titre" minlength="5" type="text" required />
          </div>
        </div>
        <div class="form-group ">
          <label for="cmarque" class="control-label col-lg-3">Description de la tâche<span class="required">*</span></label>
          <div class="col-lg-9">
            <input class="form-control " id="cdescription" type="text" name="description" required />
          </div>
        </div>
        <div class="form-group ">
          <label for="cprix" class="control-label col-lg-3">Date d'Echéance<span class="required">*</span></label>
          <div class="col-lg-9">
            <input class="form-control" id="cecheance" name="dateEcheance" type="date" required />
          </div>
        </div>
        <div class="form-group ">
          <label for="cquantite" class="control-label col-lg-3">Statut</label>
          <div class="col-lg-9">
           <select class="form-control" name="status" id="">
            @foreach ($status as $statu)
            <option value="{{$statu}}">{{$statu}}</option>
            @endforeach
           </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-3 col-lg-19">
            <button class="btn btn-primary" type="submit">Ajouter</button>
            <button class="btn btn-default" type="button">Annuler</button>
          </div>
        </div>
      </form>
    </div>
  </div>

    </section>
  </section>

  @endsection
