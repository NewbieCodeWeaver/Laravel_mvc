<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Ver equipo</h1></div>
<div class="bg-slate-200">
    
  <div class="px-8 pt-6 pb-8 mb-4">
    @foreach ($equipos as $equipo)

      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="nombre">
          Nombre
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" value="{{$equipo->nombre}}" readonly name="nombre">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="entrenador">
          Entrenador
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="entrenador" value="{{$equipo->entrenador}}" type="text" readonly name="entrenador">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="division">
           Division
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="division" value="{{$equipo->division}}" type="text" readonly name="division">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="estadio">
          Estadio
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estadio" value="{{$equipo->estadio}}" readonly type="text" name="estadio">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="club">
          Club
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="club" value="{{$equipo->nombreclub}}" readonly type="text" name="club">
      </div>
      @endforeach
      <a href="{{route('equipos.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded">
      </div>
  </div>