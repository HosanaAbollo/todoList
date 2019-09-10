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
}
