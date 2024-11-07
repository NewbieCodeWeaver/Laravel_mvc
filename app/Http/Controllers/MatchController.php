<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Partido;
use Carbon\Carbon;

class MatchController extends Controller

{

    public function indexMatch()
    {

        $modeloPartido = new Partido();

        $partidos = $modeloPartido->getAllMatches();

        $currentDate = Carbon::now()->toDateString();


        return view('indexMatch', compact('partidos', 'currentDate'));
    }


    public function addMatch()
    {

        $modeloEquipo = new Equipo();

        $equipos = $modeloEquipo->getAllTeams();

        return view('addMatch', compact('equipos'));
    }


    public function saveMatch(Request $request)
    {
        $request->validate([
            'equipo_local' => 'required|different:equipo_visitante',
            'equipo_visitante' => 'required|different:equipo_local',
            'goles_local' => 'nullable|integer|between:0,99',
            'goles_visitante' => 'nullable|integer|between:0,99',
            'hora' => 'required',
            'fecha' => 'required',
            'ubicacion' => 'required|min:3|max:30',
            'equipo_visitante_division' => 'same:equipo_local_division'
        ]);

        $fecha = Carbon::createFromFormat('d-m-y', $request->fecha)->format('d-m-y');
        $hora = Carbon::createFromFormat('H:i', $request->hora)->format('H:i');

        $partido = new Partido();
        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->hora = $hora;
        $partido->fecha = $fecha;
        $partido->ubicacion = $request->ubicacion;
        $partido->goles_local = $request->goles_local;
        $partido->goles_visitante = $request->goles_visitante;

        $partido->save();

        return redirect()->route('index')->with('success', 'Partido agregado exitosamente');
    }



    public function showMatch(Partido $partido)
    {

        $modelopartido = new Partido();
        $matchDetails = $modelopartido->getMatchDetails($partido->id);

        return view('showMatch', compact('partido', 'matchDetails'));
    }


    public function editMatch(Partido $partido)
    {

        $modeloEquipo = new Equipo();

        $equipos = $modeloEquipo->getAllTeams();

        return view('editMatch', compact('partido', 'equipos'));
    }

    public function updateMatch(Request $request, Partido $partido)
    {


        $request->validate([

            'equipo_local' => 'required|different:equipo_visitante',
            'equipo_visitante' => 'required|different:equipo_local',
            'goles_local' => 'nullable|integer|between:0,99',
            'goles_visitante' => 'nullable|integer|between:0,99',
            'hora' => 'required',
            'fecha' => 'required',
            'ubicacion' => 'required|min:3|max:30',
            'equipo_visitante_division' => 'same:equipo_local_division'

        ]);

        $fecha = Carbon::createFromFormat('d-m-y', $request->fecha)->format('d-m-y');
        $hora = Carbon::createFromFormat('H:i', $request->hora)->format('H:i');

        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->hora = $hora;
        $partido->fecha = $fecha;
        $partido->ubicacion = $request->ubicacion;
        $partido->goles_local = $request->goles_local;
        $partido->goles_visitante = $request->goles_visitante;


        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);
    }


    public function destroyMatch(Partido $partido)
    {

        $partido->delete();
        return redirect()->action([MatchController::class, 'indexMatch']);
    }
}
