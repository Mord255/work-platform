@extends('layouts/header')
@section('content')
    <div id="appMain" class="container">
        <div class="card mt-5">
            <h3 class="card-title m-3">Buscar Empleo:</h3>
            <div class="card-body">
                <div class="row align-items-center justify-content-center">
                    <div class="col-9">
                        <form @submit.prevent="getJobs()">
                            <div class="form-group">
                                <label class="visually-hidden" for="search">Ingresa el titulo, cargo, empresa o palabras clave que estes buscando</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa-solid fa-search"></i></div>
                                    <input type="text" id="search" name="search" class="form-control" placeholder="Ingresa el titulo, cargo, empresa o palabras clave que estes buscando:"
                                        aria-describedby="button" v-model="search">
                                    <button id="button" class="btn btn-outline-primary">Button</button>{{--  @onClick="getJobs()" --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-1" v-if="list_jobs.length > 0">
            <h3 class="card-title m-3">Empleos:</h3>
            <div class="card-body">
                <div class="row align-items-center justify-content-center">
                    <div class="col-4 mb-4" v-for="job in list_jobs">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Buscar Empleo:</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="{{ asset('js/main.js')}}"></script>
@endsection
