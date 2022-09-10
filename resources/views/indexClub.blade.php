@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')

@include('layouts.includes.header')
  
<div id="body" class="pt-20 pb-20 pl-14 pr-14 bg-slate-200 bg-[url('../resources/imgs/fondo-campo-football.png')] bg-no-repeat bg-cover	"><div id="partidos-table">
  
  <div class="float-right w-33 rounded-lg bg-red-600 mb-8 p-4 text-center text-base font-semibold text-red-50 hover:bg-red-800"><a href="{{route('club.add')}}"> <i class="fa-solid fa-circle-plus"></i></i><span class="pl-2">AÑADIR CLUB</span></a></div>
  <table class=" w-full">
  
  <thead class="border-b bg-gray-500">
            <tr>
              <th  class="text-base font-medium text-white px-10 py-6 text-left w-64">
                Nombre
              </th>
              <th  class="text-base font-medium text-white px-10 py-6 text-left">
                Localidad
                            
          <th  class="text-base font-medium text-white px-10 py-4 w-64">
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
            <td class=" text-base text-gray-900 font-light px-10 py-4 whitespace-nowrap text-center pb-5 ">
              <a href="{{route('club.show', $club)}}"><i class="fas fa-eye"></i></a> | <a href="{{route('club.edit', $club)}}"><i class="fas fa-edit"></i></a> | <form action="{{route('club.destroy', $club)}}" method="POST" class="inline"> @csrf @method('DELETE')<button type="submit"><i class="fa-solid fa-trash"></i></button></form>
              </td>
          </tr>
          
          @endforeach

</table></div> 
<div class=" pt-5"> {{$clubs->links()}}</div>
</div>

@include('layouts.includes.footer') 