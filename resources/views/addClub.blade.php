@extends('layouts.plantilla')

@section('title','Nuevo club - Clubs Manager')

@section('content')
<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Añadir club</h1>
    </div>
    <form class="px-8 pt-6 pb-8 mb-4" action="{{ route('club.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
                <div class="title text-center text-white md:text-lg">Nuevo club</div>
            </div>
            <div class="flex flex-col gap-12 md:flex-row bg-white shadow-lg data-container py-14">
                <div class="col-img col-span-2 flex flex-col justify-center items-center w-full">
                    <img src="{{url('images/profile.png');}}" alt="Foto de perfil" class="preview-img w-28 h-28 md:w-40 md:h-40 object-cover object-cover">
                    <input type="file" id="foto_perfil" name="foto_perfil" accept="image/*" onchange="previewFile()" class=" max-w-[250px] mt-10 @error('foto_perfil') is-invalid @enderror"> @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-1 col-span-2 md:col-span-1 flex flex-col justify-center items-center w-full md:border-r">
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="nombre"><strong>Nombre del club:</strong></label>
                        <input type="text" id="nombre" name="nombre" class="input-title w-56 shadow border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror">
                        @error('nombre')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="localidad"><strong>Localidad:</strong></label>
                        <input type="text" id="localidad" name="localidad" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('localidad') is-invalid @enderror">
                        @error('localidad')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2 mb-5">
                        <label for="presidente"><strong>Presidente:</strong></label>
                        <input type="text" id="presidente" name="presidente" class="shadow border rounded w-56 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('presidente') is-invalid @enderror">
                        @error('presidente')
                        <div class="text-red-500 text-xs mt-1 max-w-[175px]">{{ $message }}</div>
                        @enderror
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