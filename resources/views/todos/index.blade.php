<!-- Extension du layout de views/layouts/app.blade.php -->
@extends('layouts.app')

@section('title')
    TODO APPLICATION
@endsection

@section('content')

        <h1 class="text-center my-5">Page des Todos</h1>

        <div class="row justify-content-center">

            <div class="col-md-8 offset-md-2">

                <div class="card card-default">

                    <div class="card-header">
                        TODO
                    </div>

                    <ul class="list-group">
                        <!-- Avec cette boucle foreach, on affiche dynamiquement le nom et l'id  -->
                        @foreach($todos as $todo)

                            <li class="list-group-item">
                                {{ $todo->nom}}

                                <!-- Création d'un lien dynamique selon le le todo selectionné -->
                                <a href="/todos/{{ $todo->id }}" class="button btn-primary btn-sm float-right">
                                    voir
                                </a>

                            </li>

                        @endforeach
                        <!-- fin du fireach-->
                    </ul>

                </div>
            
            </div>
        
        </div>

@endsection


</body>
</html>