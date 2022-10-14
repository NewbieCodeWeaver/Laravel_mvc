<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\club;

class ClubController extends Controller
{
    
    public function indexClub() {

      $modeloclub = new club();

      $clubs = $modeloclub->getAllClubs();
   
      return view('indexClub',compact('clubs'));
   
   
       }


    public function addClub() {
   
      return view('addClub');
      
    }


    public function saveClub(Request $request) {

      $request->validate([

      'nombre' => 'required|string|min:3|max:50',
      'localidad' => 'required|string|min:3|max:50'  
        
       ]);



      $club = new club();

      $club->nombre = $request->nombre;
      $club->localidad = $request->localidad;

      $club->save();

      return redirect()->action([ClubController::class, 'indexClub']);

  }

  public function showClub($club) {

    $modeloclub = new club();

    $clubToShow = $modeloclub->getClub($club);

     return view('showClub',compact('clubToShow'));



 }


 
 public function editClub(club $club) { 
  

  return view('editClub', compact('club'));


}

public function updateClub(Request $request, club $club) {


  $request->validate([

    'nombre' => 'required|string|min:3|max:50',
    'localidad' => 'required|string|min:3|max:50'  
      
     ]);


  $club->nombre = $request->nombre;
  $club->localidad = $request->localidad;

  $club->save();

  return redirect()->action([ClubController::class, 'indexClub']);


  }

 public function destroyClub(club $club) {

  $club->delete();
  return redirect()->action([ClubController::class, 'indexClub']);

}



}