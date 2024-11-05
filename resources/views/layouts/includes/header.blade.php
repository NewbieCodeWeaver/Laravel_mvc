<header>
  <div id="header" class="w-full bg-gradient-to-b from-gray-700 to-gray-800 h-28 flex justify-center">
    <a href="{{route('index');}}">
      <img src="{{url('images/logo.png');}}" width="225px" height="225px" alt="clubs manager" class="z-20 relative">
    </a>
  </div>

  <div class="block z-20 lg:hidden absolute right-8 top-[128px]">
    <button class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-gray-700 hover:border-gray-700" onclick="showHideMenu()">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
      </svg>
    </button>
  </div>

  <nav class=" h-16 bg-red-600">
    <div class="text-white text-lg opacity-0 lg:opacity-100 lg:flex flex-col relative lg:static lg:flex-row lg:justify-evenly pt-28 pb-10 lg:p-0 lg:h-16 bg-red-600 z-10 transition-opacity duration-500" id="responsive-menu">
      <div class="flex flex-col lg:flex-row gap-0 lg:gap-10 justify-center items-center lg:w-1/3">
        <a href="{{route('index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
          Home
        </a>
        <a href="{{route('jugadores.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
          Jugadores
        </a>
        <a href="{{route('club.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
          Clubs
        </a>
      </div>
      <div class="flex flex-col lg:flex-row gap-0 lg:gap-10 justify-center items-center lg:w-1/3">
        <a href="{{route('equipos.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
          Equipos
        </a>
        <a href="{{route('partido.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
          Partidos
        </a>
        <a href="{{route('estadisticas.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
          Estadísticas
        </a>
      </div>
    </div>
  </nav>
</header>