@extends('layouts.plantilla')

@section('title','Mostrar equipo - Clubs Manager')

@section('content')

<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Ficha del equipo</h1>
    </div>

    <div>
        <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
            <div class="text-center text-white md:text-lg">{{$equipo->nombre}}</div>
        </div>
        <div class="flex flex-col md:flex-row gap-10 md:gap-0 items-center w-10 bg-white shadow-lg data-container py-14">
            <div class="w-1/2 flex flex-col justify-center items-center">
                <div class="text-left">
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Entrenador:</strong></label>
                        <span>{{$equipo->entrenador}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Division:</strong></label>
                        <span>{{$equipo->division}}</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 flex flex-col justify-center items-center">
                <div class="text-left">
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Estadio:</strong></label>
                        <span>{{$equipo->estadio}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Nombre club:</strong></label>
                        @foreach($clubs as $club)
                        @if ($club->id == $equipo->club_id)
                        {{$club->nombre}}
                        @endif
                        @endforeach

                        <span>{{$equipo->nombreclub}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-group flex gap-5 mb-16">
        <a href="{{route('equipos.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
        </a>
        <a href="{{route('equipos.edit', $equipo)}}" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-pen-to-square pr-2"></i> EDITAR
        </a>
    </div>

</main>

@endsection