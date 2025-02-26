@extends('layouts.master')
    @section('content')
    <h1>Listado de Peliculas</h1>
    <div class="row my-1 fs-5">
    @foreach($peliculas as $key=>$pelicula)
        <div class='col-2'>
            <h3>Titulo: {{$pelicula['title']}}</h3>
            <h3>Año: {{$pelicula['year']}}</h3>
            <h3>Director: {{$pelicula['director']}}</h3>
            <img src="{{$pelicula['poster']}}" style="width:400px;height:auto;"></img>
            <p>{{$pelicula['rented']}}</p>
            <p>{{$pelicula['synopsis']}}</p>
        </div>
        @endforeach
    </div>
@stop