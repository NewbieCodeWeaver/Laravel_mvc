@extends('layouts.plantilla')

@section('title','Nuevo equipo - Clubs Manager')

@section('content')
<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Añadir equipo</h1>
    </div>
    <form class="px-8 pt-6 pb-8 mb-4" action="{{ route('equipos.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
                <div class="title text-center text-white md:text-lg">Nuevo equipo</div>
            </div>
            <div class="flex flex-col gap-12 md:flex-row bg-white shadow-lg data-container py-14">
                <div class="col-img col-span-2 flex flex-col justify-center items-center w-full">
                    <div class="text left">
                        <div class="flex flex-col gap-2 mb-5">
                            <label for="nombre"><strong>Nombre del equipo:</strong></label>
                            <input type="text" id="nombre" name="nombre" class="input-title w-56 shadow border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror">
                            @error('nombre')
                            <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2 mb-5">
                            <label for="entrenador"><strong>Entrenador:</strong></label>
                            <input type="text" id="entrenador" name="entrenador" class="w-56 shadow border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('entrenador') is-invalid @enderror">
                            @error('entrenador')
                            <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2 mb-5">
                            <label for="division"><strong>División:</strong></label>
                            <select id="division" name="division" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="1">
                                    Primera División
                                </option>
                                <option value="2">
                                    Segunda División
                                </option>
                                <option value="3">
                                    Tercera División
                                </option>
                            </select>
                            @error('division')
                            <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-1 col-span-2 md:col-span-1 flex flex-col justify-start items-center w-full md:border-r">
                    <div class="text-left">
                        <div class="flex flex-col gap-2 mb-5">
                            <label for="estadio"><strong>Estadio:</strong></label>
                            <input type="text" id="estadio" name="estadio" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('estadio') is-invalid @enderror">
                            @error('estadio')
                            <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2 mb-5">
                            <label class="text-sm mb-3 block" for="club">
                                <strong> Club</strong>
                            </label>
                            <select id="club" name="club" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @foreach($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->nombre}}</option>
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