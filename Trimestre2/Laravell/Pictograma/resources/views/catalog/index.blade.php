<x-layout>
    <div class="row mt-5">
        <h1 class='text-center'>Lista de Actividades</h1>
    </div>
    <div class="row">
        @foreach ($imgs as $img)
            <img class='imgs' src="{{$img->imagen}}" alt="">
        @endforeach
    </div>
</x-layout>