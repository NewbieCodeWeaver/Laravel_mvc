<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Editar club</h1></div>
<div class="bg-slate-200">
    <form action="{{route('club.update', $club)}}" class=" px-8 pt-6 pb-8 mb-4" method="POST">
        @csrf
        @method('PUT')

      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="nombre">
          Nombre del club
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" value="{{$club->nombre}}"  name="nombre">
      </div>
      <div class="mb-10">
        <label class="text-sm font-bold mb-3 block" for="localidad">
          Localidad
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="localidad" value="{{$club->localidad}}" type="text"  name="localidad" @error('localidad') is-invalid @enderror>
        @error('localidad')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <button type="submit" class="bg-red-600 hover:bg-red-800 pt-3 pb-3 pl-5 pr-5 text-white rounded mr-3">Actualizar club</button><a href="{{route('equipos.index')}}"><a href="{{route('club.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded cursor-pointer">
      </div>
    </form>
  </div>