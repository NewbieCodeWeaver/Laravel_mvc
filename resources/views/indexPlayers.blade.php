@extends('layouts.plantilla')

@section('title','Jugadores - Clubs Manager')

@section('content')

<main class="bg-slate-200">

  <div class="hero-pages">
    <h1 class="text-3xl md:text-4xl text-center text-white">Jugadores</h1>
  </div>

  <div class="flex flex-col items-center inner-container relative">
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
          <th class="text-sm md:text-base font-medium text-white hidden lg:table-cell px-3 py-5">
            Nº Partidos
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden md:table-cell px-3 py-5">
            Goles
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden px-3 py-5">
            Tarj. amarillas
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden px-3 py-5">
            Tarj. rojas
          </th>
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            Acciones
          </th>
        </tr>
      </thead>

      <tbody class="tbody-matches overflow-hidden">

        @if($jugadores->isEmpty())

        <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
          <td colspan="11" class="text-center py-10 text-lg">No existen jugadores</td>
        </tr>


        @else

        @foreach ($jugadores as $jugador)
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
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
            <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
              {{$jugador->partidos_jugados}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
            <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
              {{$jugador->goles}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden px-3 py-5">
            <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
              {{$jugador->tarjetas_amarillas}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden px-3 py-5">
            <a href="{{ route('jugador.show', $jugador) }}" class="block w-full h-full">
              {{$jugador->tarjetas_rojas}}
            </a>
          </td>
          <td class=" text-base text-gray-900 font-light whitespace-nowrap px-3 py-5 flex gap-2">
            <a href="{{route('jugador.show', $jugador)}}">
              <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{route('jugador.edit', $jugador)}}">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{route('jugador.destroy', $jugador)}}" method="POST" class="inline"> @csrf @method('DELETE')
              <button type="submit">
                <i class="fa-solid fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>

        @endforeach

        @endif

      </tbody>
    </table>
    <div class="buttons-group flex gap-5 mt-10">
      <a href="{{route('jugador.add')}}" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-plus pr-2"></i> NUEVO
      </a>
    </div>
  </div>
  <div>
    {{$jugadores->links()}}
  </div>
</main>


@endsection