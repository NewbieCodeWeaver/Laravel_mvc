<div class ="p-6 mt-5  bg-teal-500"><h1 class="text-center text-xl">Editar partido</h1></div>
<div class="bg-slate-200">
    <form class=" px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-local">
          Equipo local
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="equipo-local" type="text" value="" name="equipo_local">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="equipo-visitante">
          Equipo visitante
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="equipo-visitante" type="text" name="equipo_visitante">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="hora-partido">
           Hora
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora-partido" type="text" name="hora">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="fecha">
          Fecha
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha-partido" type="text" name="fecha">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="ubicacion-partido">
          Ubicacion
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ubicacion-partido" type="text" name="ubicacion">
      </div>
      <div class="mb-4">
        <label class="text-sm font-bold mb-3 block" for="resultado-partido">
          Resultado
        </label>
        <input class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="resultado-partido" type="text" name="resultado">
      </div>
      <button type="submit" class="bg-teal-500 hover:bg-teal-600 pt-3 pb-3 pl-5 pr-5 text-white rounded mr-3">Actualizar partido</button>
    </form>
  </div>