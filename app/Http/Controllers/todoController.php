<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tache;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use App\Models\Location;

class todoController extends Controller
{
   public function indexTodo(){
    $tasks = Tache::where('user_id', auth()->user()->id)->get();
    $tasks_terminer = Tache::where([['user_id', auth()->user()->id], ['statut', 'terminé']])->get();
    $tasks_en_cours = Tache::where([['user_id', auth()->user()->id], ['statut', 'en cours']])->get();
    $tasks_a_faire = Tache::where([['user_id', auth()->user()->id], ['statut', 'a faire']])->get();
    return view('todo.indexTodo', compact('tasks', 'tasks_en_cours', 'tasks_terminer', 'tasks_a_faire'));
   }
   public function ajout(){
    $status = ['a faire', 'en cours', 'terminé'];
    return view('todo.ajout', compact('status'));
   }
   public function ajoutPost(Request $request){

    $request->validate([
        "titre"=>['required'],
        "description"=>['required'],
        "dateEcheance"=>['required'],
        "status"=>['required'],

    ]);
    $user=Auth::user();
    Tache::create([
        'titre' => $request->titre,
        'description' => $request->description,
        'dateEcheance'=> $request->dateEcheance,
        'statut'=> $request->status,
        'user_id' => $user->id,
    ]);
    return redirect()->back()->with('statut', 'Tâche créer avec succès!');
}
   public function read(){
        
        $user=Auth::user();
        $type = "";
        $tasks = $user->tache()->orderby('dateEcheance')->get();
        return view('todo.read', ['tasks'=>$tasks, 'type'=>$type]);

   }
    public function read_a_faire(){
        $user=Auth::user();
        $type = "a faire";
        $tasks = $user->tache()->where('statut', 'a faire')->orderby('dateEcheance')->get();
        return view('todo.read', ['tasks'=>$tasks, 'type'=>$type]);
        
    }
    public function read_en_cours(){
        $user=Auth::user();
        $type = "en cours";
        $tasks = $user->tache()->where('statut', 'en cours')->get();
        return view('todo.read', ['tasks'=>$tasks, 'type'=>$type]);
    }
    public function read_terminer(){
        $user=Auth::user();
        $type = "terminer";
        $tasks = $user->tache()->where('statut', 'terminé')->get();
        return view('todo.read', ['tasks'=>$tasks, 'type'=>$type]);
    }


    public function change($id){
        $tache = Tache::findOrFail($id);
        // dd($tache->statut);
        switch ($tache->statut) {
            case 'a faire':
                $tache->statut = "en cours";
                break;
            case 'en cours':
                $tache->statut = "terminé";
                break;
            default:
            
                break;
        }

        $tache->save();
        return redirect()->back()->with('statut', 'Status changé !');
    }
   public function show($id){
         $tache = Tache::findOrFail($id);
         $status = ['a faire', 'en cours', 'terminé'];
        return view('todo.update', ['tache'=>$tache, 'status'=>$status]);
   }
   public function updatePost($id, Request $request){
    $request->validate([
        "titre"=>['required'],
        "description"=>['required'],
        "date"=>['required'],
        "statut"=>['required'],

    ]);
    $user=Auth::user();
    Tache::where('id' , $id)->update([
        'titre' => $request->titre,
        'description' => $request->description,
        'dateEcheance'=> $request->date,
        'statut'=> $request->statut,
        'user_id' => $user->id,
    ]);
    return redirect()->route('read')->with('statut', 'Modification éffectuée acec succès !');
   }


   public function delete($id){

    // dd(Tache::find($id));

    Tache::findOrFail($id)->delete();
    return redirect()->back()->with('statut', 'Suppression effectuée !');
   }

   
    public function collaborate(Request $request)
{
    $id_tache = $request->input('id_tache');
    $collaboration = $request->input('collaboration');

    foreach ($collaborations as $id_collaboration) {
        Collaboration::create([
            'id_tache' => $task_id,
            'id_user' => $id_collaboration
        ]);
    }

    return redirect()->back()->with('success', 'Collaboration ajoutée avec succès');
}

   }

  


