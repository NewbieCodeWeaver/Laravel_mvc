<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partido;
use App\Models\equipo;
use Carbon\Carbon;

class MatchController extends Controller

{

    public function indexMatch()
    {

        $modeloPartido = new partido();

        $partidos = $modeloPartido->getMatchIndex();

        $modeloEquipo = new equipo();

        $equipos = $modeloEquipo->getAllteams();

        $currentDate = Carbon::now()->toDateString();


        return view('indexMatch', compact('partidos', 'equipos', 'currentDate'));
    }


    public function addMatch()
    {

        $modeloEquipo = new equipo();

        $equipos = $modeloEquipo->getAllteams();

        return view('addMatch', compact('equipos'));
    }


    public function saveMatch(Request $request)
    {
        $request->validate([
            'equipo_local' => 'required',
            'equipo_visitante' => 'required|different:equipo_local',
            'goles_visitante' => 'nullable|integer|max:20',
            'hora' => 'required',
            'fecha' => 'required',
            'ubicacion' => 'required|min:3|max:50',
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
        $partido->resultado = $request->goles_local . "  -  " . $request->goles_visitante;

        $partido->save();

        if ($request->ajax()) {
            return response()->json(['success' => true, 'partido' => $partido]);
        } else {
            return redirect()->route('index')->with('success', 'Partido agregado exitosamente');
        }
    }



    public function showMatch(partido $partido)
    {

        $modeloEquipo = new equipo();

        $equipos = $modeloEquipo->getAllteams();

        $golesLocal = substr($partido->resultado, 0, 1);

        $golesVisitante = substr($partido->resultado, -1, 1);

        return view('showMatch', compact('partido', 'equipos', 'golesLocal', 'golesVisitante'));
    }


    public function editMatch(partido $partido)
    {

        $modeloEquipo = new equipo();

        $equipos = $modeloEquipo->getAllteams();

        $golesLocal = substr($partido->resultado, 0, 1);

        $golesVisitante = substr($partido->resultado, -1, 1);


        return view('editMatch', compact('partido', 'equipos', 'golesLocal', 'golesVisitante'));
    }

    public function updateMatch(Request $request, partido $partido)
    {


        $request->validate([

            'equipo_local' => 'required',
            'goles_local' => 'nullable|integer|max:20',
            'equipo_visitante' => 'required|different:equipo_local',
            'goles_visitante' => 'nullable|integer|max:20',
            'hora' => 'required',
            'fecha' => 'required',
            'ubicacion' => 'required|min:3|max:50',

        ]);

        $fecha = Carbon::createFromFormat('d-m-y', $request->fecha)->format('d-m-y');
        $hora = Carbon::createFromFormat('H:i', $request->hora)->format('H:i');

        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->hora = $hora;
        $partido->fecha = $fecha;
        $partido->ubicacion = $request->ubicacion;
        $partido->resultado = $request->goles_local . "  -  " . $request->goles_visitante;

        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);
    }


    public function destroyMatch(partido $partido)
    {

        $partido->delete();
        return redirect()->action([MatchController::class, 'indexMatch']);
    }
}
