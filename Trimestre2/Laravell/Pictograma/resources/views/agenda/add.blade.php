<x-layout>
    <div class="row">
        <h1>Añadir Datos Agenda</h1>
    </div>
    <div class="row">
        <form method="POST" action="{{url('agenda.add')}}">
            @csrf
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date"class="form-control form-control-sm" name="fecha" id="fecha"/>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time"class="form-control form-control-sm" name="hora" id="hora"/>
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">Id Persona</label>
                <select class="form-select form-select-lg" name="id"id="id">
                    @foreach($personas as $persona)
                        <option value="{{$persona->id}}">{{$persona->nombre.' '.$persona->apellidos}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
            @foreach ($imagenes as $img)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$img->id}}" id="{{$img->id}}" />
                <div class="card col-3 text-center">
                    <img class="card-img-top imgs mx-auto" src="{{$img->imagen}}" alt="{{$img->desripcion}}">
                    <div class="card-body">
                    <label class="form-check-label" for="">{{$img->imagen}}</label>
                    </div>
                </div>
            </div>            
            @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</x-layout>