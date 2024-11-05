<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\Partido;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function __invoke()
    {

        $modeloJugador = new Jugador();
        $numeroJugadores = $modeloJugador->countPlayers();
        $numeroGoles = $modeloJugador->countGoals();
        $bestPlayer = $modeloJugador->getBestPlayer();
        $worstPlayer = $modeloJugador->getWorstPlayer();

        $modeloPartido = new Partido();
        $numeroPartidos = $modeloPartido->countMatches();


        return view('indexStats', compact('numeroJugadores', 'numeroPartidos', 'numeroGoles', 'bestPlayer', 'worstPlayer'));
    }
}
