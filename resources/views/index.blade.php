@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')


<div id="container" class="h-full bg-player bg-cover">
    <div class="p-10">
        <h1 class="text-6xl text-center lg:text-left text-white pt-10 lg:w-1/3">
            Toma el control 
            <span class="text-gray-500">
                total
            </span>
                del partido
        </h1>
        <div class="grid">
            <div class="justify-self-center lg:justify-self-start mt-16 w-40 rounded-lg bg-red-600 mb-8 p-4 text-center text-base font-semibold text-red-50 hover:bg-red-800">
                <a href="{{route('partido.index')}}">
                    <span class="pl-2 pr-2 uppercase">
                        ver partidos
                    </span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection