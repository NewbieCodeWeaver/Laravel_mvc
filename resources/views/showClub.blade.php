@extends('layouts.plantilla')

@section('title','Mostrar club - Clubs Manager')

@section('content')

<main class="bg-slate-200">

    <div class="hero-pages">
        <h1 class="text-3xl md:text-4xl text-center text-white">Ficha del club</h1>
    </div>

    <div>
        <div class="py-2 md:py-6 bg-gray-500 flex justify-center items-center">
            <div class="text-center text-white md:text-lg">{{$club->nombre}}</div>
        </div>
        <div class="flex flex-col md:flex-row gap-10 md:gap-0 items-center w-10 bg-white shadow-lg data-container py-14">
            <div class="w-1/2 flex justify-center">
                <img src="{{ $club->foto_perfil ? asset('images/' . $club->foto_perfil) : asset('images/profile.png') }}" alt="club photo" class="w-28 h-28 md:w-40 md:h-40 object-cover rounded-full">
            </div>
            <div class="w-1/2 flex flex-col justify-center items-center">
                <div class="text-left">
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Localidad:</strong></label>
                        <span>{{$club->localidad}}</span>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 mb-5">
                        <label><strong>Presidente:</strong></label>
                        <span>{{$club->presidente}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-group flex gap-5 mb-16">
        <a href="{{route('club.index')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-arrow-left pr-2"></i> VOLVER
        </a>
        <a href="{{route('club.edit', $club)}}" class="btn-add bg-primary hover:bg-primary-hover text-white font-bold py-2 px-4 rounded">
            <i class="fa-solid fa-pen-to-square pr-2"></i> EDITAR
        </a>
    </div>

</main>

@endsection