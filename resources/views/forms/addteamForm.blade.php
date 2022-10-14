<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Nuevo equipo</h1></div>
<div class="bg-slate-200">
    <form class=" px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="nombre-equipo">
          Nombre del equipo
        </label>
        <input type="text" id="nombre-equipo" name="nombre" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror"> 
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="entrenador">
           Entrenador
        </label>
        <input type="text" id="entrenador" name="entrenador" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="division">
          Division
        </label>
        <select id="division" name="division" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="1">Primera División</option>
                <option value="2">Segunda División</option>
                <option value="3">Tercera División</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="estadio">
          Estadio
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estadio" type="text" name="estadio">
      </div>
      <div class="mb-10">
        <label class="text-sm font-bold mb-3 block" for="club">
          Club
        </label>
        <select id="club" name="club" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @foreach($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->nombre}}</option>
            @endforeach 
        </select>
      </div>
      <button type="submit" class="bg-red-600 hover:bg-red-800 pt-3 pb-3 pl-5 pr-5 text-white rounded mr-3">Crear equipo</button><a href="{{route('equipos.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded cursor-pointer">
    </form>
  </div>
