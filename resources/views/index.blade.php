@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')
<div class="hero bg-black h-screen overflow-hidden flex justify-center">
    <div class="inner-container pt-8 flex flex-col md:flex-row gap-y-10">
        <div class="flex flex-col gap-y-5 md:gap-y-12 justify-center items-center md:items-start md:w-2/3">
            <h1 class="text-3xl 2xl:text-6xl md:text-xl text-white text-center md:text-left pt-10 md:pt-0">
                Gestiona todos tus clubes</br> y partidos en un sólo sitio
            </h1>
            <div class="justify-self-center lg:justify-self-start w-40 rounded-lg bg-primary p-4 text-center text-base font-semibold text-red-50 hover:bg-red-800">
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

<!-- Proximos partidos -->

<div class="home-content flex justify-center ">
    <div class="inner-container">
        <h2 class="text-5xl text-center my-16">Próximos partidos</h2>
        <table class="w-full mb-16">
            <thead class="border-b bg-secondary">
                <tr>
                    <th class="text-base font-medium text-white px-10 py-6 text-left">
                        Equipo local
                    </th>
                    <th class="text-base font-medium text-white px-10 py-6 text-left">
                        Equipo visitante
                    </th>
                    <th class="text-base font-medium text-white px-10 py-6 text-left">
                        Hora
                    </th>
                    <th class="text-base font-medium text-white px-10 py-4 text-left">
                        Fecha
                    </th>
                    <th class="text-base font-medium text-white px-10 py-4 text-left">
                        Ubicación
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($partidos as $partido)
                <tr class=" bg-teal-50">
                    <td class=" text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
                        {{$partido->Local}}
                    </td>
                    <td class="text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
                        {{$partido->Visitante}}
                    </td>
                    <td class="text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
                        {{$partido->hora}}
                    </td>
                    <td class="text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
                        {{$partido->fecha}}
                    </td>
                    <td class="text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
                        {{$partido->ubicacion}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection