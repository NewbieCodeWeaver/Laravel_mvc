@extends('layouts.plantilla')

@section('title','Mostrar jugador - Clubs Manager')

@section('content')



<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Ficha del jugador</h1>
    </div>

    <div>
        <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
            <div class="text-center text-white md:text-lg">{{$jugador->nombre}}</div>
        </div>
        <div class="grid grid-cols-2 gap-y-16 data-container bg-white shadow-lg py-14">
            <div class="col-span-2 flex justify-center"><img src="{{ $jugador->foto_perfil ? asset('images/' . $jugador->foto_perfil) : asset('images/profile.png') }}" alt="player photo" class="w-28 md:w-44 rounded-full"></div>
            <div class="col-span-2 md:col-span-1 flex flex-col items-center md:border-r">
                <div class="text-left w-1/2">
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Nombre:</strong></label>
                        <span>{{$jugador->nombre}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Nº de camiseta:</strong></label>
                        <span>{{$jugador->numero_camiseta}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Posición:</strong></label>
                        <span>{{$jugador->posicion}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Equipo:</strong></label>
                        <span>@foreach($equipos as $equipo)
                            @if($equipo->id == $jugador->equipo_id) {{$equipo->nombre}} @endif
                            @endforeach</span>
                    </div>
                </div>
            </div>
            <div class="col-span-2 md:col-span-1 flex flex-col items-center">
                <div class="text-left w-1/2">
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Partidos jugados:</strong></label>
                        <span>{{$jugador->partidos_jugados}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Goles:</strong></label>
                        <span>{{$jugador->goles}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Tarjetas amarillas:</strong></label>
                        <span>{{$jugador->tarjetas_amarillas}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2">
                        <label><strong>Tarjetas rojas:</strong></label>
                        <span>{{$jugador->tarjetas_rojas}}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="buttons-group flex gap-5 mb-16">
        <a href="{{route('jugadores.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
        </a>
        <a href="{{route('jugador.edit', $jugador)}}" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-pen-to-square pr-2"></i> EDITAR
        </a>
    </div>

</main>

@endsection