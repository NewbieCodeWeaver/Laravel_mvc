<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Editar partido</h1></div>
<div class="bg-slate-200">
    <form action="{{route('partido.update', $partido)}}" class=" px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
    @method('PUT')
    
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-local">
          Equipo local
        </label>
        <select id="equipo-local" name="equipo_local" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          @foreach($equipos as $equipo)
              <option @if($partido->Local === $equipo->nombre) selected @endif value="{{ $equipo->id }}">{{ $equipo->nombre}}</option>
          @endforeach 
      </select>
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-visitante">
          Equipo visitante
        </label>
        <select id="equipo-visitante" name="equipo_visitante" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          @foreach($equipos as $equipo)
              <option @if($partido->Visitante === $equipo->nombre) selected @endif value="{{ $equipo->id }}">{{ $equipo->nombre}}</option>
          @endforeach 
      </select>
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="hora-partido">
           Hora
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora-partido" value="{{$partido->hora}}" type="text" name="hora">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="fecha">
          Fecha
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha-partido" value="{{$partido->fecha}}" type="text" name="fecha">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="ubicacion-partido">
          Ubicacion
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ubicacion-partido" value="{{$partido->ubicacion}}" type="text" name="ubicacion">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="resultado-partido">
          Resultado
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="resultado-partido" value="{{$partido->resultado}}" type="text" name="resultado">
      </div>
      <button type="submit" class="bg-red-600 hover:bg-red-800 pt-3 pb-3 pl-5 pr-5 text-white rounded mr-3">Actualizar partido</button><a href="{{route('partido.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded">
    </form>
  </div>