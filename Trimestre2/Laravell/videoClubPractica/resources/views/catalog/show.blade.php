@extends('layouts.master')
    @section('content')
    <h1>Vista detalle pelicula {{$pelicula['title']}}</h1>
    </a><img src="{{$pelicula['poster']}}" style="width:300px;height:auto;"></img>
    <h3>Director: {{$pelicula['director']}}</h3>
    <h3>Año: {{$pelicula['year']}}</h3>
    <h3>Sinopsis: </h3>
    <p>{{$pelicula['synopsis']}}</p>
@stop