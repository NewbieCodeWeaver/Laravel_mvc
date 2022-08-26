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

        $partido->equipoLocal = $request->equipoLocal;
        $partido->equipoVisitante = $request->equipoVisitante;
        $partido->equipoLocal = $request->equipoLocal;
        $partido->hora = $request->hora;
        $partido->ubicacion = $request->ubicacion;
        $partido->resultado = $request->resultado;

        $partido->save();

        return redirect()->action([MatchController::class, 'indexMatch']);

    }


    public function showMatch($partido) {

        return view('showMatch');


    }


      // Edita los datos del partido

    public function editMatch(partido $partidos) { 


       return view('editMatch', compact('partido'));
    }

    public function updateMatch() {

        // updateMatch action
    }

    public function destroyMatch() {

        // destroyMatch action
    }




}
