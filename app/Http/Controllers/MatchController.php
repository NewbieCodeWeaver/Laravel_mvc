<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partido;
use App\Models\equipo;
use Carbon\Carbon;

class MatchController extends Controller

{

    public function indexMatch() {

    $modeloPartido = new partido();

    $partidos = $modeloPartido->getMatchIndex();

    $date = Carbon::now()->toDateString();


     return view('indexMatch',compact('partidos', 'date'));

    }


    public function addMatch() {

        $modeloEquipo = new equipo();

        $equipos = $modeloEquipo->getAllteams();
   
        return view('addMatch',compact('equipos'));
    }
    

    public function saveMatch(Request $request) {

     $equipo_local_division = equipo::find($request->equipo_local);
     $equipo_visitante_division = equipo::find($request->equipo_visitante);

     $request->request->add(['equipo_local_division' => $equipo_local_division->division]);
     $request->request->add(['equipo_visitante_division' => $equipo_visitante_division->division]);
     
     $request->validate([

         'equipo_local' => 'required',
         'goles_local'=> 'nullable|integer|max:20',
         'equipo_visitante' =>'required|different:equipo_local',
         'goles_visitante'=> 'nullable|integer|max:20', 
         'hora' =>'required', 
         'fecha' =>'required', 
         'ubicacion' =>'required|min:3|max:50',
         'equipo_visitante_division'=>'same:equipo_local_division'
         
        ]);
      

        $partido = new partido();

        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->hora = $request->hora;
        $partido->fecha = $request->fecha;
        $partido->ubicacion = $request->ubicacion;
        $partido->resultado = $request->goles_local . "  -  " . $request->goles_visitante;

        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);

    }


    public function showMatch(partido $partido) {

    $modeloEquipo = new equipo();

    $equipos = $modeloEquipo->getAllteams();    

    $golesLocal = substr($partido->resultado, 0, 1);

    $golesVisitante = substr($partido->resultado, -1, 1);

    return view('showMatch',compact('partido','equipos', 'golesLocal','golesVisitante'));


    }


    public function editMatch(partido $partido) { 

      $modeloEquipo = new equipo();

      $equipos = $modeloEquipo->getAllteams();

      $golesLocal = substr($partido->resultado, 0, 1);

      $golesVisitante = substr($partido->resultado, -1, 1);
      

      return view('editMatch', compact('partido', 'equipos', 'golesLocal', 'golesVisitante'));
       
    }

    public function updateMatch(Request $request, partido $partido) {

            
     $request->validate([

        'equipo_local' => 'required',
        'goles_local'=> 'nullable|integer|max:20',
        'equipo_visitante' =>'required|different:equipo_local',
        'goles_visitante'=> 'nullable|integer|max:20', 
        'hora' =>'required', 
        'fecha' =>'required', 
        'ubicacion' =>'required|min:3|max:50',
        
       ]);


        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->hora = $request->hora;
        $partido->fecha = $request->fecha;
        $partido->ubicacion = $request->ubicacion;
        $partido->resultado = $request->goles_local . "  -  " . $request->goles_visitante;

        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);
   

        
    }


    public function destroyMatch(partido $partido) {

        $partido->delete();
        return redirect()->action([MatchController::class, 'indexMatch']);
    }




}