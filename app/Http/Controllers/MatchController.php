<?php

namespace App\Http\Controllers;

use App\Models\partido;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {


     // $partidos = partido::all();
      

     $partidos = partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
     ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
     ->select('equipolocal.nombre as Local', 'equipovisitante.nombre as Visitante', 'partidos.hora', 'partidos.fecha', 'partidos.ubicacion', 'partidos.resultado', 'partidos.id')
     ->get();


    return view('index',compact('partidos'));

     //return $partidos;

    }
}