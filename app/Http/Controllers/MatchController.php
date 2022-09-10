<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partido;
use App\Models\equipo;
use Carbon\Carbon;

class MatchController extends Controller

{

    public function indexMatch() {

     $partidos = partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
     ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
     ->select('equipolocal.nombre as Local', 'equipovisitante.nombre as Visitante', 'partidos.hora', 'partidos.fecha', 'partidos.ubicacion', 'partidos.resultado', 'partidos.id')
     ->paginate(5);

     $date = Carbon::now()->toDateString();


     return view('indexMatch',compact('partidos', 'date'));

    }


    public function addMatch() {

        $equipos = equipo::all();
   
        return view('addMatch',compact('equipos'));
    }
    

    public function saveMatch(Request $request) {

     $equipo_local_division = equipo::find($request->equipo_local);
     $equipo_visitante_division = equipo::find($request->equipo_visitante);

     $request->request->add(['equipo_local_division' => $equipo_local_division->division]);
     $request->request->add(['equipo_visitante_division' => $equipo_visitante_division->division]);


     // return $request;


        $request->validate([

         'equipo_local' => 'required',
         'equipo_visitante' =>'required|different:equipo_local', 
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
        $partido->resultado = $request->resultado;

        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);

    }


    public function showMatch($partido) {

        $partidos = partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
        ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
        ->select('equipolocal.nombre as Local', 'equipovisitante.nombre as Visitante', 'partidos.hora', 'partidos.fecha', 'partidos.ubicacion', 'partidos.resultado', 'partidos.id')
        ->where('partidos.id',"=",$partido)
        ->get();
   
        // return $partidos;

        return view('showMatch',compact('partidos'));



    }


    public function editMatch(partido $partido) { 


      $equipos = equipo::all();
      $partido = partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
        ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
        ->select('equipolocal.nombre as Local', 'equipovisitante.nombre as Visitante', 'partidos.hora', 'partidos.fecha', 'partidos.ubicacion', 'partidos.resultado', 'partidos.id')
        ->find($partido->id);

       return view('editMatch', compact('partido', 'equipos'));

      // return $equipos;
       
    }

    public function updateMatch(Request $request, partido $partido) {


        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->hora = $request->hora;
        $partido->fecha = $request->fecha;
        $partido->ubicacion = $request->ubicacion;
        $partido->resultado = $request->resultado;

        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);
   

        
    }


    public function destroyMatch(partido $partido) {

        $partido->delete();
        return redirect()->action([MatchController::class, 'indexMatch']);
    }




}