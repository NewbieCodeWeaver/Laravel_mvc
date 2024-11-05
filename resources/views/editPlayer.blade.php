@extends('layouts.plantilla')

@section('title','Editar jugador - Clubs Manager')

@section('content')

<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Editar jugador</h1>
    </div>
    <form class="px-8 pt-6 pb-8 mb-4" action="{{route('jugador.update', $jugador)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
                <div class="title text-center text-white md:text-lg">{{$jugador->nombre}}</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 justify-center items-center bg-white shadow-lg data-container py-14">
                <div class="col-img col-span-2 flex flex-col justify-center items-center w-full">
                    <img src="{{ $jugador->foto_perfil ? asset('images/' . $jugador->foto_perfil) : asset('images/profile.png') }}" alt="player photo" class="preview-img w-28 h-28 md:w-40 md:h-40 object-cover rounded-full mb-10">
                    <input type="file" id="foto_perfil" name="foto_perfil" onchange="previewFile()" class="max-w-[250px] shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('foto_perfil') is-invalid @enderror">
                    @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-1 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full md:border-r">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="nombre"><strong>Nombre del jugador:</strong></label>
                        <input type="text" id="nombre" name="nombre" value="{{$jugador->nombre}}" class="input-title w-56 shadow border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror">
                        @error('nombre')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="numero_camiseta"><strong>Número de camiseta:</strong></label>
                        <input type="number" id="numero_camiseta" name="numero_camiseta" value="{{$jugador->numero_camiseta}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('numero_camiseta') is-invalid @enderror">
                        @error('numero_camiseta')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="posicion"><strong>Posición:</strong></label>
                        <select id="posicion" name="posicion" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('posicion') is-invalid @enderror">
                            <option @if ($jugador->posicion === "defensa") selected @endif value="defensa">Defensa</option>
                            <option @if ($jugador->posicion === "delantero") selected @endif value="delantero">Delantero</option>
                            <option @if ($jugador->posicion === "centrocampista") selected @endif value="centrocampista">Centrocampista</option>
                            <option @if ($jugador->posicion === "portero") selected @endif value="portero">Portero</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="equipo_id"><strong>Equipo:</strong></label>
                        <select id="equipo_id" name="equipo_id" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('equipo_id') is-invalid @enderror">
                            @foreach($equipos as $equipo)
                            <option @if($equipo->id === $jugador->equipo_id) selected @endif value="{{ $equipo->id }}">{{ $equipo->nombre}}</option>
                            @endforeach
                        </select>
                        @error('equipo_id')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-2 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="goles"><strong>Goles:</strong></label>
                        <input type="number" id="goles" name="goles" value="{{$jugador->goles}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('goles') is-invalid @enderror">
                        @error('goles')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="partidos_jugados"><strong>Partidos jugados:</strong></label>
                        <input type="number" id="partidos_jugados" name="partidos_jugados" value="{{$jugador->partidos_jugados}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('partidos_jugados') is-invalid @enderror">
                        @error('partidos_jugados')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="tarjetas_amarillas"><strong>Tarjetas amarillas:</strong></label>
                        <input type="number" id="tarjetas_amarillas" name="tarjetas_amarillas" value="{{$jugador->tarjetas_amarillas}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tarjetas_amarillas') is-invalid @enderror">
                        @error('tarjetas_amarillas')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="tarjetas_rojas"><strong>Tarjetas rojas:</strong></label>
                        <input type="number" id="tarjetas_rojas" name="tarjetas_rojas" value="{{$jugador->tarjetas_rojas}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tarjetas_rojas') is-invalid @enderror">
                        @error('tarjetas_rojas')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons-group flex gap-5 mt-10 justify-center">
            <a href="{{route('jugadores.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
            </a>
            <button type="submit" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-floppy-disk pr-2"></i>GUARDAR
            </button>
        </div>

</main>


@endsection