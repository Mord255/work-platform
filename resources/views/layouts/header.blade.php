<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Buscar Trabajos</title>
        <script src="https://kit.fontawesome.com/69b06fa715.js" crossorigin="anonymous"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased" style="background: white;">
        <nav class="navbar bg-light navbar-expand-lg bg-body-tertiary">
            <div class="container container-fluid">
                <a class="navbar-brand" href="#">Jean Franco</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Buscar Empleos</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#">Link</a></li> --}}
                    </ul>
                    <div class="d-flex" >
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i><span class="ms-2"> Invitado</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Iniciar Sesión</a></li>
                                <li><a class="dropdown-item" href="#">Nueva Publicación</a></li>
                                <li><a class="dropdown-item" href="#">Nuevo Usuario</a></li>
                                <li><a class="dropdown-item" href="#">Mis postulaciones</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </nav>
        @yield('content')
    </body>
    <script>

    </script>
</html>
