@extends('layouts.master')
    @section('content')
    <div class="row">
        <h1>Vista detalle pelicula {{$pelicula->title}}</h1>
        <div class="col-12 col-lg-4">
            <img src="{{$pelicula->poster}}" style="width:300px;height:auto;"></img>
        </div>
        <div class="col-12 col-lg-7">
            <h3>Director: {{$pelicula->director}}</h3>
            <h3>Año: {{$pelicula->year}}</h3>
            <h3>Sinopsis: </h3>
            <p>{{$pelicula->synopsis}}</p>
            <a href="{{url('catalog/edit/' . $pelicula->id)}}"><button>Editar</button></a>
            <a href="{{url('catalog')}}" class="fs-3">Volver</a>
        </div>
    </div>
    <h1>Modificar pelicula "{{$pelicula->title}}"</h1>
    <form action="{{url('catalog/edit')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$pelicula->id}}">
        <div class="row">
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" value="{{$pelicula->title}}"/>
            </div>
            <div class="mb-3 col-6">
                <label for="director" class="form-label">Director</label>
                <input type="director" class="form-control" name="director" id="director" aria-describedby="helpId" value="{{$pelicula->director}}"/>
            </div>
            <div class="mb-3 col-6">
                <label for="year" class="form-label">Año</label>
                <input type="year" class="form-control" name="year" id="year" aria-describedby="helpId" value="{{$pelicula->year}}"/>
            </div>
            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                <input type="text" class="form-control" name="poster" id="poster" aria-describedby="helpId" value="{{$pelicula->poster}}"/>
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea class="form-control" name="synopsis" id="synopsis" aria-describedby="helpId" value="{{$pelicula->synopsis}}">{{$pelicula->synopsis}}</textarea>
            </div>
            <div class="mb-3">
                <label for="rented" class="form-label">Rentada</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rented" id="renteds"/>
                    <label class="form-check-label" for="renteds"> Si </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rented" id="rentedn"/>
                    <label class="form-check-label" for="rentedn">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Editar
            </button>
        </div>
    </form>    
@stop