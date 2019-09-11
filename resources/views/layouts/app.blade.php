<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Inclusion CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
 
    <!-- Définir une section nommé 'title'  -->
    <title>
            @yield('title')
    </title>

</head>

    <body>

        <!-- Création de la barre de navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Todo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Accueil<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/todos">Créer une tâche</a>
                    <a class="nav-item nav-link" href="/todos">Les tâches</a>
                </div>
            </div>
        </nav>


        <div class="container">
            
            <!-- Définir une section nommé 'content'  -->
            @yield('content');

        </div>
        
    </body>

</html>
