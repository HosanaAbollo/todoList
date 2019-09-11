<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Affichage des tâches
Route::get('/todos', 'TodosController@index' ); 

// Affichage de détail d'une tâche dynamiquement
Route::get('/todos/{todo}', 'TodosController@show');

// Créer une nouvelle tâche
Route::get('/new-todos', 'TodosController@create');

// Envoyer de données au serveur et enregistrement en base de données
Route::post('/enregistrer-tache', 'TodosController@store');
