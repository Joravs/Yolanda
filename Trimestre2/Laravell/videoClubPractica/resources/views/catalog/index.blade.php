@extends('layouts.master')
    @section('content')
    <h1>Listado de Peliculas</h1>
    <div class="row my-1 fs-5">
    @foreach($peliculas as $key=>$pelicula)
        <div class='col'>
            <h3>Titulo: {{$pelicula['title']}}</h3>
            <img src="{{$pelicula['poster']}}" style="width:300px;height:auto;"></img>
        </div>
        @endforeach
    </div>
@stop