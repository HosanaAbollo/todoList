<!-- Extension du layout -->
@extends('layouts.app')


<!-- Affichage de la section nommé 'content' comme défini dans layouts/app.blade.php -->
@section('content') <!-- Début de la section-->

    <h1 class="text-center">Modifier la tâche</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">

                <div class="card-header">
                    Modification de cette tâche
                </div>
                <div class="card-body">

                    @if($errors->any())

                        <div class="alert alter-danger">

                            <ul class="list-group">

                                @foreach($errors->all() as $error)
                                    <li class="list-group_item">
                                        {{ $error }}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        
                    @endif

                    <form action="/todos/{{ $todo->id }}/mise-a-jour-tache" method="POST">

                        <!-- Ajout de la directive csrf
                        
                            Permet de générer un token qui sera vérifié par le serveur lors d'envoie de formulaire
                            pour des raisons de sécurité
                        -->

                        @csrf

                            <div class="form-group">                     
                            <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ $todo->nom }}">
                            </div>

                            <div class="form-group">
                                <textarea name="description" placeholder="Description" id="" cols="5" rows="5" class="form-control"> {{ $todo->description }}</textarea>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Modifier la tâche</button>
                            </div>
                    </form>
                </div>

            </div>

        </div>
    </div>


@endsection