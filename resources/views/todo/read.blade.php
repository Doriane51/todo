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
              <span aria-hidden="true" >&times;</span>
            </button>
          </div>
        </div>

          <h3 class="page-header"><i class="fa fa fa-bars"></i> Liste des tâches</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
            <li><i class="fa fa-bars"></i>Pages</li>
            <li><i class="fa fa-square-o"></i>Liste des tâches {{$type}}</li>
          </ol>
        </div>
      </div>

      
      <div class="col-lg-12">
        <section class="panel">
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><img src="todo/img/titre.png" alt="icone titre" style="width:20px; height:20px;"> Titre</th>
                <th><img src="todo/img/descri.png" alt="icone editer" style="width: 20px; height:20px;"> Description</th>
                <th><img src="todo/img/date.png" alt="icone editer" style="width:15px; height:15px;"> Date d'echeance</th>
                <th><img src="todo/img/statut.png" alt="icone editer" style="width:20px; height:20px;"> Statut</th>
              </tr>
              @foreach ($tasks as $task)
              <tr>
                  <td>{{$task->titre}}</td>
                  <td>{{$task->description}}</td>
                  <td>{{$task->dateEcheance}}</td>
                  <td>{{$task->statut}}</td>

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="{{route('show', ['id' => $task->id]) }}"><img src="todo/img/pencil.png" alt="icone editer" style="width:12px; height:12px;"></a>
                      {{-- <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a> --}}
                      
                      <div class="modal fade" id="{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $task->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <form action="{{route('delete', ['id' => $task->id])}}" method="get">
                              
                              @csrf

                              <div class="modal-body">
                                <h3>Voulez-vous vraiment supprimer cette tâche ?</h3> 
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                <input type="submit" class="btn btn-primary" value="Oui" />
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      
                      <a class="btn btn-danger" data-toggle="modal" data-target="#{{ $task->id }}"><i class="icon_close_alt2"></i></a>
                      @if($task->statut != "terminé")
                      <a href="{{route('change', ['id' => $task->id])}}"><button style="border:none; height:30px; background-color:lightgreen; margin-bottom:5px; padding:1px;"><img src="todo/img/check-mark.png" alt="icone accepter" style="width:35px; height:30px; margin-left:5px;"></button></a>
                      @endif
                   </div>

                   
                    
                         

                  </td>
                </tr>
              
              @endforeach
            </tbody>
          </table>
        </section>
      </div>
    </div>
    </section>
  </section>
@endsection
