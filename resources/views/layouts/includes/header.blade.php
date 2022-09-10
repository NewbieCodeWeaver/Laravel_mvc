<div id="page" class=" w-full">
    <header>
        <div id="header" class=" w-full  bg-gradient-to-b from-gray-700 to-gray-800 h-28 flex flex-row">
                <div class=" basis-1/4"></div>
                <div id="logo" class="basis-3/4">
                    <a href="/laravel-mvc/public/"><img class=" mx-auto" src="/laravel-mvc/resources/imgs/logo.png" width="225px" height="225px" alt="clubs manager"></a></div>
                    <div class="basis-1/4"></div>
        </div>
    </header>

    <div id="nav" class=" p-3 pl-12 bg-red-600"><ul class="flex justify-center"><li class="p-2 uppercase text-white hover:underline"><a href="{{route('index')}}">home</a></li><li class="p-2 uppercase text-white hover:underline"><a href="{{route('club.index')}}">clubs</a></li><span class="w-56"></span><li class="p-2 uppercase text-white hover:underline"><a href="{{route('equipos.index')}}">equipos</a></li><li class="p-2 uppercase text-white hover:underline"><a href="{{route('partido.index')}}">partidos</a></li></ul></div>
    </div>