<footer>
    <div id="footer-top" class="bg-gradient-to-b from-gray-700 to-gray-800 text-center p-5 text-white flex flex-col gap-y-8 md:gap-y-0 md:flex-row py-10">
        <div class="md:w-1/3 flex flex-col items-center justify-center gap-3"><a href="{{route('index');}}"><img src="{{url('images/logo.png');}}" width="180px" height="180px" alt="clubs manager" class="z-20 relative"></a><span>Clubs Manager <?php echo date('Y') ?></span></div>
        <div class="md:w-1/3 flex flex-col items-center justify-center gap-1 md:gap-5">
            <h3 class="text-2xl">Menú</h3>
            <ul class="flex flex-col md:gap-3">
                <li> <a href=" {{route('index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
                        Home
                    </a></li>
                <li> <a href="{{route('jugadores.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
                        Jugadores
                    </a></li>
                <li> <a href="{{route('club.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
                        Clubs
                    </a></li>
            </ul>
        </div>
        <div class="md:w-1/3 flex flex-col items-center justify-center gap-1 md:gap-5">
            <h3 class="text-2xl">Otros enlaces</h3>
            <ul class="flex flex-col md:gap-3">
                <li> <a href="{{route('equipos.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
                        Equipos
                    </a></li>
                <li> <a href="{{route('partido.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
                        Partidos
                    </a></li>
                <li> <a href="{{route('estadisticas.index')}}" class="block lg:inline-block mt-5 lg:mt-0 hover:underline">
                        Estadísticas
                    </a></li>
            </ul>
        </div>
    </div>
    <div id="footer-bottom" class="bg-red-600 h-8">
    </div>
</footer>