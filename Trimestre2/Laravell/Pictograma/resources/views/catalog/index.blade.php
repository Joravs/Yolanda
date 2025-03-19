<x-layout>
    <x-containerTab>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/catalog')}}">AGENDA TEA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/catalog')}}">Catalogo Pictogramas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('agenda/add')}}">Nueva Entrada</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('agenda/buscar')}}">Mostrar Agenda</a>
        </li>
    </x-containerTab>
    <div class="row">
        <div class="row mt-5">
            <h1 class='text-center'>Lista de Actividades</h1>
        </div>
        <div class="row">
            @foreach ($imgs as $img)
            <div class="card col-3 text-center">
                <img class="card-img-top imgs mx-auto" src="{{asset($img->imagen)}}" alt="{{$img->desripcion}}">
                <div class="card-body">
                <h5 class="card-title">{{$img->imagen}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>