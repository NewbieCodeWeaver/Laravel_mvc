<div class ="p-6 mt-5  bg-teal-500"><h1 class="text-center text-xl">Ver partido</h1></div>
<div class="bg-slate-200">
    <form action="{{route('partido.show', $partido)}}" class=" px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
    @method('PUT')
    
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-local">
          Equipo local
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="equipo-local" type="text" value="{{$partido->equipo_local}}" readonly name="equipo_local">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-visitante">
          Equipo visitante
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="equipo-visitante" value="{{$partido->equipo_visitante}}" type="text" readonly name="equipo_visitante">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="hora-partido">
           Hora
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora-partido" value="{{$partido->hora}}" type="text" readonly name="hora">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="fecha">
          Fecha
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha-partido" value="{{$partido->fecha}}" readonly type="text" name="fecha">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="ubicacion-partido">
          Ubicacion
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ubicacion-partido" value="{{$partido->ubicacion}}" readonly type="text" name="ubicacion">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="resultado-partido">
          Resultado
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="resultado-partido" value="{{$partido->resultado}}" readonly type="text" name="resultado">
      </div>
    </form>
  </div>