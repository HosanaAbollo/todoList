<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Inclusion CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">


    <title>Page des Todos</title>
</head>
<body>



<div class="container">

    <h1 class="text-center my-5">Page des Todos</h1>

    <div class="row justify-content-center">

        <div class="col-md-8 offset-md-2">

        <div class="card card-default">

            <div class="card-header">

                TODO

            </div>

            <ul class="list-group">

            @foreach($todos as $todo)

                <li class="list-group-item">
                    {{ $todo->nom}}

                </li>

            @endforeach

            </ul>

            </div>
        
        </div>
    
    </div>



</div>
    
</body>
</html>