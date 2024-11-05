<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipo;

use App\Models\Club;

class TeamController extends Controller
{

  public function indexTeam()
  {

    $modeloEquipo = new Equipo();

    $equipos = $modeloEquipo->getAllTeams();

    return view('indexTeam', compact('equipos'));
  }


  public function addTeam()
  {

    $modeloClub = new Club();
    $clubs = $modeloClub->getAllClubs();


    return view('addTeam', compact('clubs'));
  }


  public function saveTeam(Request $request)
  {

    $request->validate([
      'nombre' => 'required|min:3|max:50',

    ]);

    $equipo = new Equipo();

    $equipo->nombre = $request->nombre;
    $equipo->entrenador = $request->entrenador;
    $equipo->division = $request->division;
    $equipo->estadio = $request->estadio;
    $equipo->club_id = $request->club;

    $equipo->save();

    return redirect()->action([TeamController::class, 'indexTeam']);
  }

  public function showTeam(Equipo $equipo)
  {

    $modeloClub = new Club();

    $clubs = $modeloClub->getAllClubs();

    return view('showTeam', compact('equipo', 'clubs'));
  }

  public function editTeam(Equipo $equipo)
  {


    $modeloClub = new Club();

    $clubs = $modeloClub->getAllClubs();

    return view('editTeam', compact('equipo', 'clubs'));
  }

  public function updateTeam(Request $request, Equipo $equipo)
  {

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

  public function destroyTeam(Equipo $equipo)
  {

    $equipo->delete();
    return redirect()->action([TeamController::class, 'indexTeam']);
  }
}
