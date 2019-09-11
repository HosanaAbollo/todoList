<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Accès au model
use App\Todo; 

class TodosController extends Controller
{
    
    public function index()
    {

        // Récupération de tous les todo en BDD et on l'envoie dans la variable $todos
        $todos = Todo::all();

        return view('todos.index')->with('todos', $todos);
    }

    // La propriété dynamique de notre route est utilisé en argumant dans notre méthode 
    public function show($todoId)
    {
        /* Dump une variable dynamique
            die(var_dump($todoId));1
            dd($todoId); // kill l'application
        */

        // Récupération de l'id en cours
          $todo = Todo::find($todoId);

        // Retourne la vue show du dossier ./ressource/views/todos/
        return view('todos.show')->with('todo',$todo);

    }

    // Création de la vue pour la création d'un tâche
    public function create()
    {
        //$todos = Todo::all();
        return view('todos.create');
    }

    public function store()
    {
        // Dump l'objet requete envoyée
        //dd(request()->all());

        // Créer une nouvelle instance de notre modèle
        $todo = new Todo();

        // Récupération des données envoyées par l'user
        $data = request()->all();

        $todo->nom =  $data['nom'];

        $todo->description = $data['description'];
        
        $todo->complet = false;

        // Enregistrer en base de données
        $todo->save();

        // redirection l'user  à la page des tâches 
        return redirect('/todos');
    }
}
