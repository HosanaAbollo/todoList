<!-- Extension du layout -->
@extends('layouts.app')


<!-- Affichage de la section nommé 'content' comme défini dans layouts/app.blade.php -->
@section('content') <!-- Début de la section-->

<h1 class="text-center my-5">
    {{ $todo->nom }}
</h1>

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card card-default">
                <div class="card-header">
                    Détails
                </div>

                <div class="card-body">
                    {{ $todo->description }}
                </div>

            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Modifier</a>
            </div>

        </div>

    </div>

@endsection <!-- Fin de la section -->