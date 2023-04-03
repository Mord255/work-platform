<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('/css/login/login.css') }}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div id="appLogin" class="container">
            <div class="children wrapper align-items-center justify-content-center m-5">
                <div class="card login-form ">
                    <img src="https://picsum.photos/1920/1080" class="card-img-top img-fluid " alt="login">
                    <h1 class="card-title text-center m-1">Iniciar Sesión</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}"> {{-- @submit.prevent="senData()" --}}
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</label>
                                <input type="email" class="form-control" name="email" id="email" v-model="email">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" v-model="password">
                            </div>
                            <div class="mb-3 form-group">
                                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                            </div>
                            <p>Si aun no esta registrado registrese <a href="{{ route('register') }}">aquí</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @vite(['resources/js/app.js'])
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="{{ asset('js/login.js')}}"></script>
    </body>
</html>
