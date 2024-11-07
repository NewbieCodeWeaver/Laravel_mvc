<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Jugador;
use App\Models\Partido;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $modeloPartido = new Partido();

        $partidos = $modeloPartido->getPendingMatches();

        $modeloClub = new Club();

        $clubs = $modeloClub->getClubsImg();

        $currentDate = Carbon::now()->toDateString();

        $modeloJugadores = new Jugador();

        $jugadoresConPuntuacion = $modeloJugadores->getAllPlayerByScore();

        return view('index', compact('partidos', 'clubs', 'currentDate', 'jugadoresConPuntuacion'));
    }
}
