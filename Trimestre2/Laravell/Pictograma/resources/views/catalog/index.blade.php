<x-layout>
    <div class="row mt-5">
        <h1 class='text-center'>Lista de Actividades</h1>
    </div>
    <div class="row">
        @foreach ($imgs as $img)
        <div class="card col-3 text-center">
            <img class="card-img-top imgs mx-auto" src="{{$img->imagen}}" alt="{{$img->desripcion}}">
            <div class="card-body">
            <h5 class="card-title">{{$img->imagen}}</h5>
            </div>
        </div>
        @endforeach
        <a href="{{url('/agenda/add')}}"><button class="btn btn-info">Ejercicio 2</button></a>
        
    </div>
</x-layout>