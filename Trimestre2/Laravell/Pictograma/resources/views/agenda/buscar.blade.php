<x-layout>
    <x-containerTab>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/catalog')}}">AGENDA TEA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('/catalog')}}">Catalogo Pictogramas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('agenda/add')}}">Nueva Entrada</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="{{url('agenda/buscar')}}">Mostrar Agenda</a>
        </li>
    </x-containerTab>
    <div class="row">
        <div class="row">
            <h1>Ver Agenda</h1>
        </div>
        <div class="row">
        <form method="POST" action="{{url('agenda/buscar')}}">
            @csrf
            @php
                $fecha=date("Y-m-d");
            @endphp
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date"class="form-control form-control-sm" name="fecha" id="fecha" value="{{$fecha}}"/>
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">Id Persona</label>
                <select class="form-select form-select-lg" name="id"id="id">
                    @foreach($personas as $persona)
                        <option value="{{$persona->id}}">{{$persona->nombre.' '.$persona->apellidos}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Visualizar</button>
        </form>
        </div>
    </div>
</x-layout>