@extends('layouts.plantilla')

@section('title','Equipos - Clubs Manager')

@section('content')


<main class="bg-slate-200">

  <div class="hero-pages">
    <h1 class="text-3xl md:text-4xl text-center text-white">Equipos</h1>
  </div>

  <div class="flex flex-col items-center inner-container relative">
    <table class="w-full max-w-6xl shadow-lg">
      <thead class="border-b bg-gray-500 text-left">
        <tr>
          <th class="text-sm md:text-base font-medium text-white hidden md:table-cell px-3 py-5">
            <input type="checkbox" name="" id="">
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            Nombre
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden md:table-cell  px-3 py-5">
            Entrenador
          </th>
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            División
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden lg:table-cell px-3 py-5">
            Estadio
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden lg:table-cell px-3 py-5">
            Club
          </th>
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            Acciones
          </th>
        </tr>
      </thead>

      <tbody class="tbody-matches overflow-hidden">


        @if($equipos->isEmpty())

        <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
          <td colspan="11" class="text-center py-10 text-lg">No existen equipos</td>
        </tr>


        @else

        @foreach ($equipos as $equipo)
        <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap flex justify-center hidden md:table-cell px-3 py-5">
            <a href="{{ route('equipos.show', $equipo) }}" class="block w-full h-full">
              <input type="checkbox" name="" id="">
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
            <a href="{{ route('equipos.show', $equipo) }}" class="block w-full h-full">
              {{$equipo->nombre}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
            <a href="{{ route('equipos.show', $equipo) }}" class="block w-full h-full">
              {{$equipo->entrenador}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
            <a href="{{ route('equipos.show', $equipo) }}" class="block w-full h-full">
              {{$equipo->division}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden lg:table-cell px-3 py-5">
            <a href="{{ route('equipos.show', $equipo) }}" class="block w-full h-full">
              {{$equipo->estadio}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden lg:table-cell px-3 py-5">
            <a href="{{ route('equipos.show', $equipo) }}" class="block w-full h-full">
              {{ $equipo->nombreClub }}
            </a>
          </td>
          <td class=" text-base text-gray-900 font-light whitespace-nowrap px-3 py-5 flex gap-2">
            <a href="{{route('equipos.show', $equipo)}}">
              <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{route('equipos.edit', $equipo)}}">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{route('equipos.destroy', $equipo)}}" method="POST" class="inline"> @csrf @method('DELETE')
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
      <a href="{{route('equipos.add')}}" data-button-id="equipos" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-plus pr-2"></i> NUEVO
      </a>
    </div>
  </div>
  <div>
    {{$equipos->links()}}
  </div>
</main>

@endsection