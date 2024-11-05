@extends('layouts.plantilla')

@section('title','Mostrar partido - Clubs Manager')

@section('content')

<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Ficha del partido</h1>
    </div>

    <div>
        <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
            <div class="text-center text-white md:text-lg"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 justify-center items-center bg-white shadow-lg data-container py-14">
            <div class="col-1 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full md:border-r">
                <div class="flex flex-col md:flex-row gap-2 mb-10">
                    <img src="{{ $matchDetails->localClubImg ? asset('images/' . $matchDetails->localClubImg) : asset('images/profile.png') }}" alt="club photo" class="w-28 md:w-56 rounded-full">
                </div>
                <div class="flex flex-col md:text-left">
                    <div class="flex flex-col md:flex-row gap-2 mb-5 md-items-left">
                        <label><strong>Equipo local:</strong></label>
                        <span>{{$matchDetails->local}} </span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Goles local:</strong></label>
                        <span>{{$partido->goles_local}}</span>
                    </div>
                </div>
            </div>
            <div class="col-2 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full md:text-left">
                <div class="flex flex-col md:flex-row gap-2 mb-10">
                    <img src="{{ $matchDetails->visitanteClubImg ? asset('images/' . $matchDetails->visitanteClubImg) : asset('images/profile.png') }}" alt="club photo" class="w-28 md:w-56 rounded-full">
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Equipo visitante:</strong></label>
                        <span>{{$matchDetails->visitante}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Goles visitante:</strong></label>
                        <span>{{$partido->goles_visitante}}</span>
                    </div>
                </div>
            </div>
            <div class="col-img col-span-2 flex flex-col md:flex-row justify-around items-center w-full">
                <div class="w-1/3 md:w-full text-left md:text-center flex flex-col mb-5 gap-2">
                    <label><strong>Hora:</strong></label>
                    {{$partido->hora}}
                </div>
                <div class="w-1/3 md:w-full text-left md:text-center flex flex-col mb-5 gap-2">
                    <label><strong>Fecha:</strong></label>
                    {{$partido->fecha}}
                </div>
                <div class="w-1/3 md:w-full text-left md:text-center flex flex-col mb-5 gap-2">
                    <label><strong>Ubicación:</strong></label>
                    {{$partido->ubicacion}}
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-group flex gap-5 mb-16">
        <a href="{{route('partido.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
        </a>
        <a href="{{route('partido.edit', $partido)}}" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-pen-to-square pr-2"></i> EDITAR
        </a>
    </div>

</main>

@endsection