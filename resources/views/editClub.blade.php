@extends('layouts.plantilla')

@section('title','Editar club - Clubs Manager')

@section('content')
<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Editar club</h1>
    </div>
    <form class="px-8 pt-6 pb-8 mb-4" action="{{route('club.update', $club)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
                <div class=" title text-center text-white md:text-lg">{{$club->nombre}}</div>
            </div>
            <div class="flex flex-col md:flex-row gap-10 justify-center items-center bg-white shadow-lg data-container py-14">
                <div class="col-img flex flex-col justify-center items-center w-full">
                    <img src="{{ $club->foto_perfil ? asset('images/' . $club->foto_perfil) : asset('images/profile.png') }}" alt="club photo" class="preview-img w-28 h-28 md:w-40 md:h-40 object-cover rounded-full mb-10">
                    <input type="file" id="foto_perfil" name="foto_perfil" onchange="previewFile()" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('foto_perfil') is-invalid @enderror">
                    @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-1 flex flex-col justify-center items-center w-full md:border-r">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="nombre"><strong>Nombre del club:</strong></label>
                        <input type="text" id="nombre" name="nombre" value="{{$club->nombre}}" class="input-title w-56 shadow border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror">
                        @error('nombre')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="localidad"><strong>Localidad:</strong></label>
                        <input type="text" id="localidad" name="localidad" value="{{$club->localidad}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('localidad') is-invalid @enderror">
                        @error('localidad')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="presidente"><strong>Presidente:</strong></label>
                        <input type="text" id="presidente" name="presidente" value="{{$club->presidente}}" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('presidente') is-invalid @enderror">
                        @error('presidente')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons-group flex gap-5 mt-10 justify-center">
            <a href="{{route('club.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
            </a>
            <button type="submit" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-floppy-disk pr-2"></i>GUARDAR
            </button>
        </div>

</main>
@endsection