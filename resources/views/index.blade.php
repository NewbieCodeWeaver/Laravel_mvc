@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')

@include('layouts.includes.header')
  
<div id="body" class="pt-20 pb-20 pl-14 pr-14 bg-slate-200"><div id="partidos-table">
  
  <div class="float-right w-33 rounded-lg bg-orange-400 mb-8 p-4 text-center text-base font-semibold text-red-50 hover:bg-orange-500"><a href="{{route('partido.add')}}"> <i class="fa-solid fa-circle-plus"></i></i><span class="pl-2">AÑADIR PARTIDO</span></a></div>
  <table class=" w-full">
  
  <thead class="border-b bg-teal-500">
            <tr>
              <th  class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                Equipo local
              </th>
              <th  class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                Equipo visitante
              </th>
              <th  class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                Hora
              </th>
                            <th class="text-base font-medium text-gray-900 px-6 py-4 text-left">
                Fecha
              </th>
                            </th>
                            <th  class="text-base font-medium text-gray-900 px-6 py-4 text-left">
                Ubicacion
              </th>
                            </th>
                            </th>
                            <th  class="text-base font-medium text-gray-900 px-6 py-4 text-left">
                Resultado
              </th>
            </th>
          </th>
          <th  class="text-base font-medium text-gray-900 px-6 py-4 text-left">
Acciones
</th>
            </tr>

          </thead>


                    <tbody>
                    @foreach ($partidos as $partido)  
            <tr class=" bg-teal-50">
              <td class=" text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$partido->Local}}
              </td>
              <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$partido->Visitante}}
              </td>
              <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$partido->hora}}
              </td>
                            <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{$partido->fecha}}
              </td>
                            </td>
                            <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$partido->ubicacion}}
              </td>
                            </td>
                            </td>
                            <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$partido->resultado}}
              </td>
              <td class=" text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <a href="{{route('partido.show', $partido)}}"><i class="fas fa-eye"></i></a> | <a href="{{route('partido.edit', $partido)}}"><i class="fas fa-edit"></i></a> | <form action="{{route('partido.destroy', $partido)}}" method="POST" class="inline"> @csrf @method('DELETE')<button type="submit"><i class="fa-solid fa-trash"></i></button></form>
                </td>
            </tr>
            
            @endforeach
  
  </table></div> 

</div>

 @include('layouts.includes.footer') 

@endsections