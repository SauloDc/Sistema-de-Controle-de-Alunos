<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class=" ml-3 navbar-brand" href="{{ route('Escola.index') }}">Escolas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Turmas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Alunos<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <form class="mr-3 form-inline" action="{{route('Escola.create')}}" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/609f1c09b3.js" crossorigin="anonymous"></script>
</body>

</html>