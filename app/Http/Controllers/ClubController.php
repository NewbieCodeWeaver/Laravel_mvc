<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Club;

class ClubController extends Controller
{

  public function indexClub()
  {

    $clubs = Club::paginate(10);

    return view('indexClub', compact('clubs'));
  }


  public function addClub()
  {

    return view('addClub');
  }


  public function saveClub(Request $request)
  {

    $request->validate([

      'nombre' => 'required|string|min:3|max:30',
      'localidad' => 'required|string|min:3|max:30',
      'presidente' => 'required|string|min:3|max:30'

    ]);



    $club = new Club();

    $club->nombre = $request->nombre;
    $club->localidad = $request->localidad;
    $club->presidente = $request->presidente;

    if ($request->hasFile('foto_perfil')) {
      $fileName = time() . '.' . $request->foto_perfil->extension();
      $request->foto_perfil->move(public_path('images'), $fileName);
      $club->foto_perfil = $fileName;
    } else {
      $club->foto_perfil = 'images/profile.png';
    }


    $club->save();

    return redirect()->action([ClubController::class, 'indexClub']);
  }

  public function showClub(Club $club)
  {

    return view('showClub', compact('club'));
  }



  public function editClub(Club $club)
  {


    return view('editClub', compact('club'));
  }

  public function updateClub(Request $request, Club $club)
  {


    $request->validate([

      'nombre' => 'required|string|min:3|max:30',
      'localidad' => 'required|string|min:3|max:30',
      'presidente' => 'required|string|min:3|max:30'

    ]);


    $club->nombre = $request->nombre;
    $club->localidad = $request->localidad;
    $club->presidente = $request->presidente;

    if ($request->hasFile('foto_perfil')) {
      $fileName = time() . '.' . $request->foto_perfil->extension();
      $request->foto_perfil->move(public_path('images'), $fileName);
      $club->foto_perfil = $fileName;
    } else {
      $club->foto_perfil = 'images/profile.png';
    }

    $club->save();

    return redirect()->action([ClubController::class, 'indexClub']);
  }

  public function destroyClub(Club $club)
  {

    $club->delete();
    return redirect()->action([ClubController::class, 'indexClub']);
  }
}
