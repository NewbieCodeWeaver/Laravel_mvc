@extends('layouts.plantilla')

@section('title','Editar equipo - Clubs Manager')

@section('content')
<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Editar equipo</h1>
    </div>
    <form class="px-8 pt-6 pb-8 mb-4" action="{{route('equipos.update', $equipo)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
                <div class="title text-center text-white md:text-lg">{{$equipo->nombre}}</div>
            </div>
            <div class="flex flex-col md:flex-row gap-10 justify-center items-start bg-white shadow-lg data-container py-14">
                <div class="col-img flex flex-col justify-center items-center w-full">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="nombre"><strong>Nombre del equipo:</strong></label>
                        <input type="text" id="nombre" name="nombre" value="{{$equipo->nombre}}" class="input-title w-56 shadow border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror">
                        @error('nombre')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="entrenador"><strong>Entrenador:</strong></label>
                        <input type="text" id="entrenador" name="entrenador" value="{{$equipo->entrenador}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('entrenador') is-invalid @enderror">
                        @error('entrenador')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="division"><strong>Division:</strong></label>
                        <select id="division" name="division" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('equipo_id') is-invalid @enderror">
                            <option @if($equipo->division === 1) selected @endif value="1">Primera División</option>
                            <option @if($equipo->division === 2) selected @endif value="2">Segunda División</option>
                            <option @if($equipo->division === 3) selected @endif value="3">Tercera División</option>
                        </select>
                        @error('division')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-1 flex flex-col justify-center items-center w-full md:border-r">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="estadio"><strong>Estadio:</strong></label>
                        <input type="text" id="estadio" name="estadio" value="{{$equipo->estadio}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('estadio') is-invalid @enderror">
                        @error('estadio')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="club"><strong>Club:</strong></label>
                        <select id="club" name="club" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('equipo_id') is-invalid @enderror">
                            @foreach($clubs as $club)
                            <option @if($equipo->nombreclub === $club->nombre) selected @endif value="{{ $club->id }}">{{ $club->nombre}}</option>
                            @endforeach
                        </select>
                        @error('club')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons-group flex gap-5 mt-10 justify-center">
            <a href="{{route('equipos.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
            </a>
            <button type="submit" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-floppy-disk pr-2"></i>GUARDAR
            </button>
        </div>

</main>
@endsection