<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\equipo;

use App\Models\club;

class TeamController extends Controller
{
    
    public function indexTeam() {

      $modeloEquipo = new equipo();

      $equipos = $modeloEquipo->getAllteamsWithPagination();
   
      return view('indexTeam',compact('equipos'));
   
   
       }


    public function addTeam() {

      $modeloClub = new club();
      $clubs = $modeloClub->getAllClubs();

   
      return view('addTeam',compact('clubs'));
    }


    public function saveTeam(Request $request) {

      $request->validate([
        'nombre' => 'required|min:3|max:50',
    
      ]);

      $equipo = new equipo();

      $equipo->nombre = $request->nombre;
      $equipo->entrenador = $request->entrenador;
      $equipo->division = $request->division;
      $equipo->estadio = $request->estadio;
      $equipo->club_id = $request->club;

      $equipo->save();

      return redirect()->action([TeamController::class, 'indexTeam']);

  }

    public function showTeam($equipo) {

    $modeloEquipo = new equipo();

    $equipos = $modeloEquipo->showTeam($equipo);

    return view('showTeam',compact('equipos'));

 }

    public function editTeam(equipo $equipo) { 


    $modeloClub = new club();
    
    $clubs = $modeloClub->getAllClubs();

    return view('editTeam', compact('equipo', 'clubs'));
}

    public function updateTeam(Request $request, equipo $equipo) {

      $request->validate([
        'nombre' => 'required|min:3|max:50',
    
      ]);  


    $equipo->nombre = $request->nombre;
    $equipo->entrenador = $request->entrenador;
    $equipo->division = $request->division;
    $equipo->estadio = $request->estadio;
    $equipo->club_id = $request->club;

    $equipo->save();

    return redirect()->action([TeamController::class, 'indexTeam']);

}

 public function destroyTeam(equipo $equipo) {

  $equipo->delete();
  return redirect()->action([TeamController::class, 'indexTeam']);

}


}