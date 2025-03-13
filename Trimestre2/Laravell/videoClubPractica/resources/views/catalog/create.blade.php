@extends('layouts.master')
    @section('content')
    <h1>Añadir pelicula</h1>
    <form action="{{url('catalog/create')}}" method="post">
        @csrf
        <input type="hidden" name="id" ">
        <div class="row">
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" />
            </div>
            <div class="mb-3 col-6">
                <label for="director" class="form-label">Director</label>
                <input type="director" class="form-control" name="director" id="director" aria-describedby="helpId" />
            </div>
            <div class="mb-3 col-6">
                <label for="year" class="form-label">Año</label>
                <input type="year" class="form-control" name="year" id="year" aria-describedby="helpId" />
            </div>
            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                <input type="text" class="form-control" name="poster" id="poster" aria-describedby="helpId" />
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea class="form-control" name="synopsis" id="synopsis" aria-describedby="helpId"></textarea>
            </div>
            <div class="mb-3">
                <label for="rented" class="form-label">Rentada</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rented" id="renteds" value='1'/>
                    <label class="form-check-label" for="renteds"> Si </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rented" id="rentedn" value='0'/>
                    <label class="form-check-label" for="rentedn">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Crear
            </button>
        </div>
    </form>    
@stop