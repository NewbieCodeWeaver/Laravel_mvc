<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\equipo;

use App\Models\club;

class TeamController extends Controller
{
    
    public function indexTeam() {


        $equipos = equipo::join('clubs', 'equipos.club_id', '=', 'clubs.id')
        ->select('clubs.nombre as nombreclub','clubs.id','equipos.id','equipos.nombre','equipos.entrenador','equipos.division','equipos.estadio')
        ->paginate(5);
   
        return view('indexTeam',compact('equipos'));
   
   
       }


    public function addTeam() {

        $clubs = club::all();
   
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

     $equipos = equipo::join('clubs', 'equipos.club_id', '=', 'clubs.id')
     ->select('equipos.nombre', 'equipos.entrenador', 'equipos.division', 'equipos.estadio', 'clubs.nombre as nombreclub')
     ->where('equipos.id',"=",$equipo)
     ->get();

     // return $equipo;

     return view('showTeam',compact('equipos'));

 }

    public function editTeam(equipo $equipo) { 

      $clubs = club::all();

      $equipos = equipo::join('clubs', 'equipos.club_id', '=', 'clubs.id')
      ->select('equipos.id','equipos.nombre', 'equipos.entrenador', 'equipos.division', 'equipos.estadio', 'clubs.nombre as nombreclub')
      ->find($equipo->id);
   

      return view('editTeam', compact('equipos', 'clubs'));
}

    public function updateTeam(Request $request, equipo $equipo) {


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