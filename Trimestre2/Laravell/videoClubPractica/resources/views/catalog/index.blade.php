@extends('layouts.master')
    @section('content')
    <h1>Listado de Peliculas</h1>
    <div class="row my-1 fs-5">
    @foreach($peliculas as $key=>$pelicula)
        <div class='col'>
            </a><img src="{{$pelicula['poster']}}" style="width:300px;height:auto;"></img>
            <a href="/Yolanda/Trimestre2/Laravell/videoClubPractica/public/catalog/show/{{$key}}"><h3>{{$pelicula['title']}}</h3></a>
        </div>
        @endforeach
    </div>
@stop