@extends('todo.template')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i>Modifier une tâche</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
            <li><i class="fa fa-bars"></i>Pages</li>
            <li><i class="fa fa-square-o"></i>Modifier une tâche</li>
          </ol>
        </div>
      </div>


      
      <div class="panel-body" style="margin:0 auto; width:60%">
        <div class="form">
          <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('updatePost', ['id'=>$tache->id])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-3">Titre<span class="required">*</span></label>
              <div class="col-lg-9">
                <input class="form-control" id="ctitre" name="titre" type="text" value="{{$tache->titre}}" required />
              </div>
            </div>
            <div class="form-group ">
              <label for="cmarque" class="control-label col-lg-3">Description<span class="required">*</span></label>
              <div class="col-lg-9">
                <input class="form-control " id="cdescription" type="text" name="description" value="{{$tache->description}}" required />
              </div>
            </div>

            <div class="form-group ">
              <label for="cdescription" class="control-label col-lg-3">Date d'échéance</label>
              <div class="col-lg-9">
                <input class="form-control " id="cdate" type="date" name="date" required value="{{$tache->dateEcheance}}">
              </div>
            </div>
            <div class="form-group ">
              <label for="cprix" class="control-label col-lg-3">Statut <span class="required">*</span></label>
              <div class="col-lg-9">
                <select class="form-control" name="statut" id="">
                    @foreach ($status as $statu)
                        <option
                        value="{{$statu}}" @if ($tache->statut===$statu)
                            selected
                        @endif
                        >{{$statu}}
                    </option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-3 col-lg-19">
                <button class="btn btn-primary" type="submit">Modifier</button>
                <a href="{{route('read')}}"><button class="btn btn-default" type="button">Annuler</button></a> 
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </section>
@endsection
