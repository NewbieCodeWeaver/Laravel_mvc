<div class ="p-6 mt-5  bg-gray-500"><h1 class="text-center text-xl text-white">Nuevo club</h1></div>
<div class="bg-slate-200">
    <form class=" px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="nombre-club">
          Nombre del club
        </label>
        <input type="text" id="nombre-club" name="nombre" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') is-invalid @enderror">
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="localidad">
            Localidad

        </label>
            <input type="text" id="localidad" name="localidad" class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
       
    </div>
    <button type="submit" class="bg-red-600 hover:bg-red-800 pt-3 pb-3 pl-5 pr-5 text-white rounded mr-3">Crear club</button><a href="{{route('club.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded">    
  </div>
      
    </form>
  </div>
