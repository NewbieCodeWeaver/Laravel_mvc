<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Editar equipo</h1></div>
<div class="bg-slate-200">

    <form action="{{route('equipos.update', $equipo)}}" class=" px-8 pt-6 pb-8 mb-4" method="POST">
        @csrf
        @method('PUT')
        
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="nombre">
          Nombre
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" value="{{$equipo->nombre}}" name="nombre" @error('nombre') is-invalid @enderror>
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="entrenador">
          Entrenador
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="entrenador" value="{{$equipo->entrenador}}" type="text"  name="entrenador">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="division">
           Division
        </label>
        <select id="division" name="division" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          <option @if($equipo->division === 1) selected @endif value="1">Primera División</option>
          <option @if($equipo->division === 2) selected @endif value="2">Segunda División</option>
          <option @if($equipo->division === 3) selected @endif value="3">Tercera División</option>
  </select>
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="estadio">
          Estadio
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estadio" value="{{$equipo->estadio}}"  type="text" name="estadio">
      </div>
      <div class="mb-10">
        <label class="text-sm font-bold mb-3 block" for="club">
          Club
        </label>
        <select id="club" name="club" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @foreach($clubs as $club)
                <option @if($equipo->nombreclub === $club->nombre) selected @endif value="{{ $club->id }}">{{ $club->nombre}}</option>
            @endforeach 
        </select>
      </div>
      <button type="submit" class="bg-red-600 hover:bg-red-800 pt-3 pb-3 pl-5 pr-5 text-white rounded mr-3">Actualizar equipo</button><a href="{{route('equipos.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded cursor-pointer">
      </form>
  </div>