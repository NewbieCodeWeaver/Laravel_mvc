<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;

class PlayerController extends Controller
{
    public function indexPlayer()
    {

        $jugadores = Jugador::paginate(10);

        $modeloEquipo = new Equipo();

        $equipos = $modeloEquipo->getAllTeams();

        return view('indexPlayers', compact('jugadores', 'equipos'));
    }
    public function addPlayer()
    {

        $modeloEquipo = new Equipo();

        $equipos = $modeloEquipo->getAllTeams();

        return view('addPlayer', compact('equipos'));
    }


    public function savePlayer(Request $request)
    {

        $request->validate([
            'nombre' => 'required|min:3|max:30',
            'numero_camiseta' => 'required|integer|between:1,99',
            'posicion' => 'required|in:defensa,delantero,centrocampista,portero',
            'equipo_id' => 'required|exists:equipos,id',
            'goles' => 'required|min:0|integer',
            'partidos_jugados' => 'required|min:0|integer',
            'tarjetas_amarillas' => 'required|min:0|integer',
            'tarjetas_rojas' => 'required|min:0|integer',

        ]);

        $jugador = new Jugador();

        $jugador->nombre = $request->nombre;
        $jugador->numero_camiseta = $request->numero_camiseta;
        $jugador->posicion = $request->posicion;
        $jugador->equipo_id = $request->equipo_id;
        $jugador->partidos_jugados = $request->partidos_jugados ?? 0;
        $jugador->goles = $request->goles ?? 0;
        $jugador->tarjetas_amarillas = $request->tarjetas_amarillas ?? 0;
        $jugador->tarjetas_rojas = $request->tarjetas_rojas ?? 0;
        $jugador->score = $this->calculatePlayerScore($request->partidos_jugados,  $request->goles, $request->tarjetas_amarillas, $request->tarjetas_rojas);

        if ($request->hasFile('foto_perfil')) {
            $fileName = time() . '.' . $request->foto_perfil->extension();
            $request->foto_perfil->move(public_path('images'), $fileName);
            $jugador->foto_perfil = $fileName;
        } else {
            $jugador->foto_perfil = 'images/profile.png';
        }

        $jugador->save();

        return redirect()->action([PlayerController::class, 'indexPlayer']);
    }


    public function showPlayer(Jugador $jugador)
    {

        $modeloEquipo = new Equipo();

        $equipos = $modeloEquipo->getAllTeams();

        return view('showPlayer', compact('jugador', 'equipos'));
    }

    public function editPlayer(Jugador $jugador)
    {
        $modeloEquipo = new Equipo();

        $equipos = $modeloEquipo->getAllTeams();

        return view('editPlayer', compact('jugador', 'equipos'));
    }

    public function updatePlayer(Request $request, Jugador $jugador)
    {

        $request->validate([
            'nombre' => 'required|min:3|max:30',
            'numero_camiseta' => 'required|integer|between:1,99',
            'posicion' => 'required|in:defensa,delantero,centrocampista,portero',
            'equipo_id' => 'required|exists:equipos,id',
            'goles' => 'required|min:0|integer',
            'partidos_jugados' => 'required|min:0|integer',
            'tarjetas_amarillas' => 'required|min:0|integer',
            'tarjetas_rojas' => 'required|min:0|integer',
        ]);


        $jugador->nombre = $request->nombre;
        $jugador->numero_camiseta = $request->numero_camiseta;
        $jugador->posicion = $request->posicion;
        $jugador->equipo_id = $request->equipo_id;
        $jugador->partidos_jugados = $request->partidos_jugados;
        $jugador->goles = $request->goles;
        $jugador->tarjetas_amarillas = $request->tarjetas_amarillas;
        $jugador->tarjetas_rojas = $request->tarjetas_rojas;
        $jugador->foto_perfil = $request->foto_perfil;
        $jugador->score = $this->calculatePlayerScore($request->partidos_jugados,  $request->goles, $request->tarjetas_amarillas, $request->tarjetas_rojas);

        if ($request->hasFile('foto_perfil')) {
            $fileName = time() . '.' . $request->foto_perfil->extension();
            $request->foto_perfil->move(public_path('images'), $fileName);
            $jugador->foto_perfil = $fileName;
        } else {
            $jugador->foto_perfil = 'images/profile.png';
        }

        $jugador->save();

        return redirect()->action([PlayerController::class, 'indexPlayer']);
    }




    public function destroyPlayer(Jugador $jugador)
    {

        $jugador->delete();
        return redirect()->action([PlayerController::class, 'indexPlayer']);
    }


    public function calculatePlayerScore($numPartidos, $numGoles, $numTarjetasAmarillas, $numTarjetasRojas)
    {

        $partidoPoints = 1;
        $golesPoints = 3;
        $tarjetaAmarillaPoints = -1;
        $tarjetaRojaPoints = -2;


        $playerScore = ($numPartidos * $partidoPoints) +
            ($numGoles * $golesPoints) +
            ($numTarjetasAmarillas * $tarjetaAmarillaPoints) +
            ($numTarjetasRojas * $tarjetaRojaPoints);

        return $playerScore;
    }
}
