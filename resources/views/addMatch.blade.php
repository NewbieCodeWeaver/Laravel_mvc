@extends('layouts.plantilla')

@section('title','Nuevo partido - Clubs Manager')

@section('content')

<script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>

<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Añadir partido</h1>
    </div>
    <form class="px-8 pt-6 pb-8 mb-4" action="{{ route('partido.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
                <div class="text-center text-white md:text-lg">Nuevo partido</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-16 justify-center items-center bg-white shadow-lg data-container py-14">
                <div class="col-1 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full">
                    <div class="flex flex-col gap-2">
                        <label for="ubicacion-partido"><strong>Ubicacion:</strong></label>
                        <input type="text" id="ubicacion-partido" type="text" name="ubicacion" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('ubicacion') is-invalid @enderror">
                        @error('ubicacion')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-2 col-span-2 md:col-span-1 flex gap-12 md:gap-14 justify-center items-center w-full">
                    <div class="flex flex-col gap-2">
                        <label for="fecha" class="text-left"><strong>Fecha:</strong></label>
                        <input type="text" datepicker datepicker-format="dd-mm-yy" name="fecha" class="shadow border rounded w-28 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('fecha') is-invalid @enderror">
                        @error('fecha')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="hora" class="text-left"><strong>Hora:</strong></label>
                        <input type="time" id="hora-partido" name="hora" class="shadow border rounded w-22 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('hora') is-invalid @enderror">
                        @error('hora')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-3 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full md:border-r">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="equipo_local"><strong>Equipo local</strong></label>
                        <select id="equipo-local" name="equipo_local" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" @error('equipo_local') is-invalid @enderror>
                            @foreach($equipos as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->nombre}}</option>
                            @endforeach
                        </select>
                        @error('equipo_local')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="goles_local"><strong>Goles marcados:</strong></label>
                        <input type="number" id="goles_local" name="goles_local" value="0" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('numero_camiseta') is-invalid @enderror">
                        @error('goles_local')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full">

                    <div class="flex flex-col gap-2 mb-5">
                        <label for="equipo_visitante"><strong>Equipo visitante</strong></label>
                        <select id="equipo-local" name="equipo_visitante" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" @error('equipo_visitante') is-invalid @enderror>
                            @foreach($equipos as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->nombre}}</option>
                            @endforeach
                        </select>
                        @error('equipo_visitante')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="goles_visitante"><strong>Goles marcados:</strong></label>
                        <input type="number" id="goles_visitante" name="goles_visitante" value="0" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('gales_visitante') is-invalid @enderror">
                        @error('goles_visitante')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons-group flex gap-5 mt-10 justify-center">
            <a href="{{route('partido.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
            </a>
            <button type="submit" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-floppy-disk pr-2"></i>GUARDAR
            </button>
        </div>

</main>
@endsection