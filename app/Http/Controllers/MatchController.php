<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partido;

class MatchController extends Controller

{

    public function indexMatch() {

        $partidos = partido::all();

        return view('index',compact('partidos'));

    }

 // Muestra el formulario para agregar un nuevo partido

    public function addMatch() {

        return view('addMatch');
    }
    
 // Guarda los datos del formulario del nuevo partido

    public function saveMatch(Request $request) {

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

 // Muestra un partido

    public function showMatch($partido) {

        return view('showMatch',compact('partidos'));

        $partido = partido::find($partido);


    }


 // Edita los datos del partido

    public function editMatch(partido $partido) { 


       return view('editMatch', compact('partido'));

       
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

 // Elimina un partido

    public function destroyMatch(partido $partido) {

        $partido->delete();
        return redirect()->action([MatchController::class, 'indexMatch']);
    }




}
