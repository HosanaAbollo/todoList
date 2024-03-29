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
        // Cette méthode recupère l'instance de la requete qu'on valide et un tableau de regle de validation
        $this->validate(request(), 
        [
            'nom' => 'required|min:6',
            'description' => 'required'
        ]);

        // Créer une nouvelle instance de notre modèle
        $todo = new Todo();

        // Récupération des données envoyées par l'user
        $data = request()->all();

        // Affectation des données a l'instance de la classe 

        $todo->nom =  $data['nom'];

        $todo->description = $data['description'];
        
        $todo->complet = false;

        // Enregistrer la nouvelle tâche en base de données
        $todo->save();

        // redirection l'user  à la page des tâches 
        return redirect('/todos');
    }

    public function edit($todoId)
    {   
        //Retrouver la tâche spécifique selectionnnée par l'utilisateur
        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo',$todo);
    }

    // Mise à jour d'un todo en BDD par l'id dynamique récupéré via l'URL 
    public function update($todoId)
    {
        // Validation des champs obligatoire
        $this->validate(request(), 
        [
            'nom' => 'required|min:6',
            'description' => 'required'
        ]);
        
        // Récupérer les données du formulaire
        $data = request()->all();

        $todo = Todo::find($todoId);

        // Assignement des valeurs

        $todo->nom = $data['nom'];

        $todo->description =$data['description'];

        $todo->save();

        return redirect('/todos');
    }
}
