<div class ="p-6 mt-5  bg-gray-600"><h1 class="text-center text-xl text-white">Ver club</h1></div>
<div class="bg-slate-200">
    
  <div class="px-8 pt-6 pb-8 mb-4"> 

      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="nombre">
          Nombre del club
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" value="{{$club->nombre}}" readonly name="nombre">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="localidad">
          Localidad
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="localidad" value="{{$club->localidad}}" type="text" readonly name="localidad">
      </div>
      <a href="{{route('club.index')}}"><input type="button" value="Volver" class="bg-slate-700 hover:bg-slate-800 pt-3 pb-3 pl-5 pr-5 text-white rounded">
      </div>
  </div>