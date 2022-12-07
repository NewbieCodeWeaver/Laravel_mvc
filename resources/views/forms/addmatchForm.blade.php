<div class ="p-6 mt-5  bg-gray-600">
  <h1 class="text-center text-xl text-white">
    Nuevo partido
  </h1>
</div>

<div class="bg-slate-200">
    <form class=" px-8 pt-6 pb-8 mb-4" method="POST">@csrf
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-local">
          Equipo local
        </label>
        <select id="equipo-local" name="equipo_local" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" @error('equipo_local') is-invalid @enderror>
          @foreach($equipos as $equipo)
              <option value="{{ $equipo->id }}">{{ $equipo->nombre}}</option>
          @endforeach 
        </select>
        @error('equipo_local')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-8">
        <label class="text-sm mb-2 block" for="goles_local">
          Goles marcados
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="goles_local" type="text" name="goles_local" @error('goles_local') is-invalid @enderror>
        @error('goles_local')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <hr class="bg-slate-300 mt-8 mb-8">
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-visitante">
          Equipo visitante
        </label>
        <select id="equipo-visitante" name="equipo_visitante" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" @error('equipo_visitante') is-invalid @enderror>
          @foreach($equipos as $equipo)
            <option value="{{ $equipo->id }}">
              {{ $equipo->nombre}}
            </option>
          @endforeach 
        </select>
        @error('equipo_visitante')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
        @error('equipo_visitante_division')
          <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-4">
        <label class="text-sm mb-3 block" for="goles_visitante">
          Goles marcados
        </label>
        <input class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="goles_visitante" type="text" name="goles_visitante" @error('goles_visitante') is-invalid @enderror>
        @error('goles_visitante')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      <hr class="mt-8 mb-8 bg-slate-300">
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="hora-partido">
           Hora
        </label>
        <input type="time" id="hora-partido" name="hora" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" @error('hora') is-invalid @enderror>
        @error('hora')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="fecha">
          Fecha
        </label>
        <input datepicker datepicker-format="yyyy-mm-dd" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha-partido" type="text" name="fecha" @error('fecha') is-invalid @enderror>
        @error('fecha')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-10">
        <label class="text-sm font-bold mb-3 block" for="ubicacion-partido">
          Ubicacion
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ubicacion-partido" type="text" name="ubicacion" @error('ubicacion') is-invalid @enderror>
        @error('ubicacion')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button type="submit" class="bg-red-600 hover:bg-red-800 pt-3 pb-3 pl-5 pr-5 mb-5 lg:mb-0 text-white rounded mr-3">
        Crear partido
      </button>
      <a href="{{route('partido.index')}}">
        <input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded cursor-pointer">
      </a>
    </form>
  </div>

