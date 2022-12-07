@extends('layouts.plantilla')

@section('title','Clubs - Clubs Manager')

@section('content')

  <div id="body" class="py-20 px-6 lg:py-20 lg:px-14 bg-slate-200 bg-stadium bg-cover">
    <div class="grid">
      <div class="justify-self-center lg:justify-self-end w-40 rounded-lg bg-red-600 mb-8 p-4 text-center text-base font-semibold text-red-50 hover:bg-red-800">
        <a href="{{route('club.add')}}">
          <i class="fa-solid fa-circle-plus"></i></i>
          <span class="uppercase">
            añadir club
          </span>
        </a>
      </div>
    </div>
    <div id="clubs-table" class="overflow-x-auto">
      <table class=" w-full">
        <thead class="border-b bg-gray-500">
          <tr>
            <th class="text-base font-medium text-white px-10 py-6 text-left w-64">
              Nombre
            </th>
            <th class="text-base font-medium text-white px-10 py-6 text-left">
              Localidad
            <th class="text-base font-medium text-white px-10 py-4 w-64">
              Acciones
            </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($clubs as $club)  
          <tr class=" bg-teal-50">
            <td class=" text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
              {{$club->nombre}}
            </td>
            <td class="text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap pb-5 ">
              {{$club->localidad}}
            </td>
            <td class="text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap text-center pb-5 ">
              <a href="{{route('club.show', $club)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </a>
              <a href="{{route('club.edit', $club)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
              </svg>
              </a>
              <form action="{{route('club.destroy', $club)}}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>  
      </table>
    </div>
    <div class=" pt-5">
      {{$clubs->links()}}
    </div>
  </div>
@endsection