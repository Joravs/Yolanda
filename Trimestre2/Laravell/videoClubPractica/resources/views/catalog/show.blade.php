@extends('layouts.master')
    @section('content')
    <div class="row">
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            @{{ session('status') }}
        </div>
        @endif
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
@stop