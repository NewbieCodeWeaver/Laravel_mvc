@extends('layouts.plantilla')

@section('title','Clubs - Clubs Manager')

@section('content')


<main class="bg-slate-200">

  <div class="hero-pages">
    <h1 class="text-3xl md:text-4xl text-center text-white">Clubs</h1>
  </div>

  <div class="flex flex-col items-center inner-container relative">
    <table class="w-full max-w-6xl shadow-lg">
      <thead class="border-b bg-gray-500 text-left">
        <tr>
          <th class="text-sm md:text-base font-medium text-white hidden md:table-cell px-3 py-5">
            <input type="checkbox" name="" id="">
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            Foto club
          </th>
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            Nombre
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden md:table-cell  px-3 py-5">
            Localidad
          </th>
          <th class="text-sm md:text-base font-medium text-white hidden md:table-cell  px-3 py-5">
            Presidente
          </th>
          <th class="text-sm md:text-base font-medium text-white px-3 py-5">
            Acciones
          </th>
        </tr>
      </thead>

      <tbody class="tbody-matches overflow-hidden">

        @if($clubs->isEmpty())

        <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
          <td colspan="11" class="text-center py-10 text-lg">No existen clubs</td>
        </tr>

        @else

        @foreach ($clubs as $club)
        <tr class="bg-teal-50 hover:bg-slate-100 border-b border-solid border-slate-60 cursor-pointer">
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap flex justify-center hidden md:table-cell px-3 py-5">
            <a href="{{ route('club.show', $club) }}" class="block w-full h-full">
              <input type="checkbox" name="" id="">
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
            <a href="{{ route('club.show', $club) }}" class="block w-full h-full">
              <a href="{{ route('club.show', $club) }}" class="block w-full h-full">
                <img class="h-8 w-8 rounded-full" src="{{ $club->foto_perfil ? asset('images/' . $club->foto_perfil) : asset('images/profile.png') }}" alt="">
              </a>
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap px-3 py-5">
            <a href="{{ route('club.show', $club) }}" class="block w-full h-full">
              {{$club->nombre}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
            <a href="{{ route('club.show', $club) }}" class="block w-full h-full">
              {{$club->localidad}}
            </a>
          </td>
          <td class="text-sm md:text-base text-gray-900 font-light whitespace-nowrap hidden md:table-cell px-3 py-5">
            <a href="{{ route('club.show', $club) }}" class="block w-full h-full">
              {{$club->presidente}}
            </a>
          </td>
          <td class=" text-base text-gray-900 font-light whitespace-nowrap px-3 py-5 flex gap-2">
            <a href="{{route('club.show', $club)}}">
              <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{route('club.edit', $club)}}">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{route('club.destroy', $club)}}" method="POST" class="inline"> @csrf @method('DELETE')
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
      <a href="{{route('club.add')}}" data-button-id="club" class="btn-add bg-secondary hover:bg-secondary-hover text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-plus pr-2"></i> NUEVO
      </a>
    </div>
  </div>
  <div>
    {{$clubs->links()}}
  </div>
</main>

@endsection