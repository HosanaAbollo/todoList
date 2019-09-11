<!-- Extension du layout -->
@extends('layouts.app')


<!-- Affichage de la section nommé 'content' comme défini dans layouts/app.blade.php -->
@section('content') <!-- Début de la section-->

    <h1 class="text-center">Créer une tâche</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">

                <div class="card-header">
                    Créer une nouvelle tâche
                </div>
                <div class="card-body">
                    <form action="/enregistrer-tache" method="POST">

                        <!-- Ajout de la directive csrf
                        
                            Permet de générer un token qui sera vérifié par le serveur lors d'envoie de formulaire
                            pour des raisons de sécurité
                        -->

                        @csrf
                            <div class="form-group">                     
                                <input type="text" class="form-control" placeholder="Nom" name="nom">
                            </div>

                            <div class="form-group">
                                <textarea name="description" placeholder="Description" id="" cols="5" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Créer la tâche</button>
                            </div>
                    </form>
                </div>

            </div>

        </div>
    </div>


@endsection