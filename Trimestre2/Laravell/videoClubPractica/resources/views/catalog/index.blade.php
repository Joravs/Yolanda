@extends('layouts.master')
    @section('content')
    <h1>Listado de Peliculas</h1>
    @foreach($peliculas as $key=>$pelicula)
    <div class="row bg-dark my-1 text-white fs-5">
        <div.col-2>
        <h3>Titulo: {{$pelicula['title']}}</h3>
        <h3>Año: {{$pelicula['year']}}</h3>
        <h3>Director: {{$pelicula['director']}}</h3>
        </div.col-2>
        <img src="{{$pelicula['poster']}}"></img>
        <p>{{$pelicula['rented']}}</p>
        <p>{{$pelicula['synopsis']}}</p>
    </div>
    @endforeach
@stop