<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Ver partido</h1></div>
<div class="bg-slate-200">
    
  <div class="px-8 pt-6 pb-8 mb-10">


    <div class=" w-full flex flex-row">
      <div class="basis-1/3 text-center text-2xl"><div class="mb-4">
        @foreach($equipos as $equipo)
        @if($equipo->id == $partido->equipo_local)  {{$equipo->nombre}} @endif
     @endforeach 
      </div>
      <div class="mb-8">
        {{ $golesLocal }}
      </div></div>
      <div class="basis-1/3 text-center text-7xl text-red-600">vs</div>
      <div class="basis-1/3 text-center text-2xl"><div class="mb-4">
          @foreach($equipos as $equipo)
             @if($equipo->id == $partido->equipo_visitante)  {{$equipo->nombre}} @endif
          @endforeach 
      </div>
      <div class="mb-8">
        {{ $golesVisitante }}
      </div></div>
    </div>
    <hr class="bg-slate-300 mt-8 mb-8">  

    <div class=" w-full flex flex-row mt-8 pb-5">
      <div class="basis-1/3 text-center"><div class="mb-8">
        <label class="text-sm font-bold mb-3 block" for="hora-partido">
          <i class="fa-solid fa-clock"></i> Hora
        </label>
        {{$partido->hora}}
      </div></div>
      <div class="basis-1/3 text-center"><div class="mb-8">
        <label class="text-sm font-bold mb-3 block" for="fecha">
          <i class="fa fa-calendar" aria-hidden="true"></i> Fecha
        </label>
        {{$partido->fecha}}
      </div></div>
      <div class="basis-1/3 text-center"><div class="mb-10">
        <label class="text-sm font-bold mb-3 block" for="ubicacion-partido">
          <i class="fa fa-map-marker" aria-hidden="true"></i> Ubicacion
        </label>
        {{$partido->ubicacion}}
      </div></div>
    </div>
    
      
      <a href="{{route('partido.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded cursor-pointer">
      </div>
  </div>