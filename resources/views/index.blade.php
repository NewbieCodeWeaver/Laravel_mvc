@extends('layouts.plantilla')

@section('title','Clubs Manager - Gestiona todos tus clubs')

@section('content')


<div class="hero bg-black h-screen w-full overflow-hidden flex justify-center">
    <div class="inner-container pt-8 flex flex-col md:flex-row gap-y-10">
        <div class="flex flex-col gap-y-5 md:gap-y-12 justify-center items-center md:items-start md:w-2/3 max-h-full">
            <h1 class="text-3xl md:text-4xl lg:text-5xl 2xl:text-6xl text-white text-center md:text-left pt-10 md:pt-0">
                Gestiona todos tus clubes</br> y partidos en un sólo sitio
            </h1>
            <div class="rounded-lg bg-primary hover:bg-primary-hover p-4 text-sm md:text-base lg:text-lg text-center font-semibold text-red-50">
                <a href="{{route('partido.index')}}">
                    <span class="uppercase">
                        ver partidos
                    </span>
                    <i class="fa-solid fa-arrow-right pl-2"></i>
                </a>
            </div>
        </div>
        <div class="flex justify-end items-end md:1/3">
            <img src="{{url('images/imagen-hero-futbolista.png');}}" class="max-h-full" alt="player ">
        </div>
    </div>
</div>

<main class="homepage">

    <!-- Proximos partidos -->

    <div class="flex flex-col items-center inner-container relative py-20">
        <h2 class="text-3xl md:text-5xl text-center mb-14">Próximos partidos</i></h2>
        <table class="w-full max-w-6xl shadow-lg">
            <thead class="border-b bg-gray-500 text-left">
                <tr>
                    <th class="text-sm md:text-base font-medium text-white hidden md:table-cell px-3 py-5">
                        <input type="checkbox" name="" id="">
                    <th class="text-sm md:text-base font-medium text-white px-3 py-5">
                        Equipos
                    </th>
                    <th class="text-sm md:text-base font-medium text-white hidden md:table-cell  px-3 py-5">
                        Hora
                    </th>
                    <th class="text-sm md:text-base font-medium text-white px-3 py-5">
                        Fecha <i class="fa-solid fa-caret-down"></i>
                    </th>
                    <th class="text-sm md:text-base font-medium text-white hidden lg:table-cell px-3 py-5">
                        Ubicación
                    </th>
                    <th class="text-sm md:text-base font-medium text-white hidden md:table-cell px-3 py-5">
                        Resultado
                    </th>
                </tr>
            </thead>

            <tbody class="tbody-matches overflow-hidden">


                @if($partidos->isEmpty())

                <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
                    <td colspan="11" class="text-center py-10 text-lg">No existen partidos próximamente</td>
                </tr>


                @else

                @foreach ($partidos as $partido)


                <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap flex justify-center hidden md:table-cell px-3 py-5">
                        <a href="{{ route('partido.show', $partido) }}" class="block w-full h-full">
                            <input type="checkbox" name="" id="">
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
                        <a href="{{ route('partido.show', $partido) }}" class="block w-full h-full">
                            <strong>{{$partido->local}} - {{$partido->visitante}}</strong>
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
                        <a href="{{ route('partido.show', $partido) }}" class="block w-full h-full">
                            {{$partido->hora}}
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
                        <a href="{{ route('partido.show', $partido) }}" class="block w-full h-full">
                            @if ($currentDate == $partido->fecha)
                            Hoy
                            @else
                            {{ $partido->fecha }}
                            @endif
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden lg:table-cell px-3 py-5">
                        <a href="{{ route('partido.show', $partido) }}" class="block w-full h-full">
                            {{$partido->ubicacion}}
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
                        <a href="{{ route('partido.show', $partido) }}" class="block w-full h-full">
                            @if ($currentDate < $partido->fecha)
                                <span class="pending">Pendiente</span>
                                @else
                                {{$partido->goles_local}} - {{$partido->goles_visitante}}
                                @endif
                        </a>
                    </td>
                </tr>

                @endforeach

                @endif

            </tbody>
        </table>

    </div>

    <!-- Contenedor acerca de clubs manager -->

    <div class="flex flex-col justify-center items-center w-full py-20 bg-secondary bg-opacity-40">
        <div class="flex flex-col items-center inner-container relative">
            <div class="flex flex-col md:flex-row justify-center w-full gap-12">
                <div class="w-full md:w-1/2">
                    <h2 class="text-4xl mb-5 text-white">Acerca de Clubs Manager</h2>
                    <p class="text-white">Clubs Manager es una aplicación web que te permite controlar desde un sólo lugar todos tus equipos, jugadores y partidos.
                        Crea, edita y borra cada uno de ellos o añádelos fácilmente a la lista. La app puede utilizarse en cualquier dispositivo
                        gracias a su <span class="font-bold">diseño responsive</span>.
                    <p class="text-white pt-5"> Además de esto, podrás obtener <a class="underline" href="{{route('estadisticas.index')}}">estadísticas actualizadas<a> con el número de partidos disputados,
                                el número de goles obtenidos así como el mejor y peor jugador.</p>
                    </p>
                    <div class="inline-block rounded-lg bg-secondary hover:bg-secondary-hover p-4 text-sm md:text-base lg:text-lg text-center font-semibold text-red-50 mt-8">
                        <a href="{{route('club.index')}}">
                            <span class="uppercase">
                                ver clubs
                            </span>
                            <i class="fa-solid fa-arrow-right pl-2"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex justify-center"><img src="{{url('images/img-balon.jpg');}}" class="w-[550px]" alt="foto informacion"></div>
            </div>
        </div>


    </div>

    <!-- Contenedor jugadores con mejor rendimiento -->

    <div class="flex flex-col items-center justify-center inner-container relative py-20">
        <h2 class="text-3xl md:text-5xl text-center mb-14">Jugadores con mejor rendimiento</i></h2>
        <table class="w-full max-w-6xl shadow-lg">
            <thead class="border-b bg-gray-500 text-left">
                <tr>
                    <th class="text-sm md:text-base font-medium text-white hidden md:table-cell px-3 py-5">
                        <input type="checkbox" name="" id="">
                    </th>
                    <th class="text-sm md:text-base font-medium text-white px-3 py-5">
                        Foto
                    </th>
                    <th class="text-sm md:text-base font-medium text-white px-3 py-5">
                        Nombre
                    </th>
                    <th class="text-sm md:text-base font-medium text-white hidden md:table-cell  px-3 py-5">
                        Nº camiseta
                    </th>
                    <th class="text-sm md:text-base font-medium text-white hidden lg:table-cell px-3 py-5">
                        Posición
                    </th>
                    <th class="text-sm md:text-base font-medium text-white hidden lg:table-cell px-3 py-5">
                        Equipo
                    </th>
                    <th class="text-sm md:text-base font-medium text-white px-3 py-5">
                        Puntuación
                    </th>
                </tr>
            </thead>

            <tbody class="tbody-matches overflow-hidden">

                @if($jugadoresConPuntuacion->isEmpty())

                <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
                    <td colspan="11" class="text-center py-10 text-lg">No existen datos sobre los jugadores</td>
                </tr>


                @else

                @foreach ($jugadoresConPuntuacion as $jugador)
                <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap flex justify-center hidden md:table-cell px-3 py-5">
                        <input type="checkbox" name="" id="">
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
                        <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
                            <img class="h-8 w-8 rounded-full" src="{{ $jugador->foto_perfil ? asset('images/' . $jugador->foto_perfil) : asset('images/profile.png') }}" alt="">
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
                        <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
                            {{$jugador->nombre}}
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden lg:table-cell px-3 py-5">
                        <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
                            {{$jugador->numero_camiseta}}
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden lg:table-cell px-3 py-5">
                        <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full capitalize">
                            {{$jugador->posicion}}
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
                        <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
                            {{$jugador->equipo_id}}
                        </a>
                    </td>
                    <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
                        <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
                            {{$jugador->score}}
                        </a>
                    </td>
                </tr>

                @endforeach

                @endif


            </tbody>
        </table>
    </div>

    <!-- Contenedor ultimos clubs añadidos -->

    <div class="flex flex-col justify-center items-center w-full py-20 bg-secondary bg-opacity-40 py-20">
        <div class="flex flex-col items-center inner-container relative">
            <h2 class="text-3xl md:text-5xl text-center text-white mb-14">Últimos clubs añadidos</i></h2>

            @if ($clubs->isEmpty())

            <div class="grid justify-center items-center">
                <span class="text-lg text-white">¡Vaya! No existen clubs. <a class="text-lg text-secondary pl-3" href="{{route('club.add')}}">¿Añadir nuevo?</a></span>

                @else

                <div class="grid grid-cols-2 md:grid-cols-4 gap-10 justify-center items-center">

                    @foreach ($clubs as $image)
                    <div>
                        <img src="{{ asset('images/' . $image) }}" alt="Club Image" class="w-[200px] h-auto">
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
            <div>
</main>


@endsection