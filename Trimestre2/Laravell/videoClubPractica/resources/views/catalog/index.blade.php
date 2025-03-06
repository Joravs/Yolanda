@extends('layouts.master')
    @section('content')
    <h1>Listado de Peliculas</h1>
    <div class="row my-1 fs-5">
    @foreach($peliculas as $pelicula)
        <div class='col'>
            </a><img src="{{$pelicula->poster}}" style="width:300px;height:auto;"></img>
            <a href="{{url('/catalog/show/'. $pelicula->id)}}"><h3>{{$pelicula->title}}</h3></a>
        </div>
        @endforeach
    </div>
@stop