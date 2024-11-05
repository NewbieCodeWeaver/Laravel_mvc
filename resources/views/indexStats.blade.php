@extends('layouts.plantilla')

@section('title','Equipos - Clubs Manager')

@section('content')


<main class="bg-slate-200">

  <div class="hero-pages">
    <h1 class="text-3xl md:text-5xl text-center text-white">Estadísticas</h1>
  </div>

  <div class="flex flex-col items-center inner-container relative mb-16">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 md:gap-10 max-w-6xl">
      <div class="md:col-span-2 md:row-span-2 flex flex-col justify-center items-center w-[250px] h-[250px] md:w-full md:h-full bg-gray-500 gap-3">
        <h3 class="text-white text-5xl md:text-9xl font-medium">@if($numeroPartidos) {{ $numeroPartidos }} @else 0 @endif </h3>
        <span class="text-white text-xl opacity-50 uppercase">Partidos</span>
      </div>
      <div class="flex flex-col justify-center items-center w-[250px] h-[250px] bg-gray-500 gap-3">
        <h3 class="text-white text-5xl font-medium">@if($numeroJugadores) {{ $numeroJugadores }} @else 0 @endif</h3>
        <span class="text-white text-xl opacity-50 uppercase">Jugadores</span>
      </div>
      <div class="flex flex-col justify-center items-center w-[250px] h-[250px] bg-gray-500 gap-3">
        <h3 class="text-white text-5xl font-medium">@if($numeroGoles) {{ $numeroGoles }} @else 0 @endif</h3>
        <span class="text-white text-xl opacity-50 uppercase">Goles</span>
      </div>
      <div class="flex flex-col justify-center items-center w-[250px] h-[250px] bg-gray-500 gap-3">
        <h3 class="text-white text-5xl font-medium text-center">@if($bestPlayer) {{ $bestPlayer }} @else ? @endif</h3>
        <span class="text-white text-xl opacity-50 uppercase">Mejor jugador</span>
      </div>
      <div class="flex flex-col justify-center items-center w-[250px] h-[250px] bg-gray-500 gap-3">
        <h3 class="text-white text-5xl font-medium text-center">@if($worstPlayer) {{ $worstPlayer }} @else ? @endif</h3>
        <span class="text-white text-xl opacity-50 uppercase">Peor jugador</span>
      </div>
    </div>

  </div>
</main>

@endsection