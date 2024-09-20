@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')
<div class="hero bg-black h-screen overflow-hidden flex justify-center">
    <div class="inner-container pt-8 flex flex-col md:flex-row gap-y-10">
        <div class="flex flex-col gap-y-5 md:gap-y-12 justify-center items-center md:items-start md:w-2/3">
            <h1 class="text-3xl md:text-5xl text-white text-center md:text-left pt-10 md:pt-0">
                Gestiona todos tus clubes</br> y partidos en un sólo sitio
            </h1>
            <div class="justify-self-center lg:justify-self-start w-40 rounded-lg bg-red-600 p-4 text-center text-base font-semibold text-red-50 hover:bg-red-800">
                <a href="{{route('partido.index')}}">
                    <span class="uppercase">
                        ver partidos
                    </span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="flex justify-end items-end md:1/3">
            <img src="{{url('images/imagen-hero-futbolista.png');}}" alt="player ">
        </div>
    </div>
</div>
@endsection