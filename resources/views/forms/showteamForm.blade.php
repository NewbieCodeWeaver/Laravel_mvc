<div class ="p-6 mt-5  bg-gray-600">
  <h1 class="text-center text-xl text-white">
  Ver equipo
  </h1>
</div>

<div class="bg-slate-200">
  <div class="px-8 pt-6 pb-8 mb-10">
    @foreach ($equipos as $equipo)
      <div class="mb-6">
        <label class="text-sm font-bold mb-3 block" for="nombre">
          Nombre
        </label>
        {{$equipo->nombre}}
      </div>
      <div class="mb-6">
        <label class="text-sm font-bold mb-3 block" for="entrenador">
          Entrenador
        </label>
        {{$equipo->entrenador}}
      </div>
      <div class="mb-6">
        <label class="text-sm font-bold mb-3 block" for="division">
           Division
        </label>
        {{$equipo->division}}
      </div>
      <div class="mb-6">
        <label class="text-sm font-bold mb-3 block" for="estadio">
          Estadio
        </label>
        {{$equipo->estadio}}
      </div>
      <div class="mb-10">
        <label class="text-sm font-bold mb-3 block" for="club">
          Club
        </label>
        {{$equipo->nombreclub}}
      </div>
      @endforeach
      <a href="{{route('equipos.index')}}">
        <input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded cursor-pointer">
      </a>  
   </div>
</div>