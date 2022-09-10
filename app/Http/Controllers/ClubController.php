<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\club;

class ClubController extends Controller
{
    
    public function indexClub() {


      $clubs = club::paginate(5);
   
      return view('indexClub',compact('clubs'));
   
   
       }


    public function addClub() {
   
      return view('addClub');
      
    }


    public function saveClub(Request $request) {

      $request->validate([

      'nombre' => 'required|string|min:3|max:50' 
        
       ]);



      $club = new club();

      $club->nombre = $request->nombre;
      $club->localidad = $request->localidad;

      $club->save();

      return redirect()->action([ClubController::class, 'indexClub']);

  }

  public function showClub($club) {

     $club = club::all()
     ->where('id',"=",$club)
     ->first();


     return view('showClub',compact('club'));



 }


 
 public function editClub(club $club) { 
  

  return view('editClub', compact('club'));


}

public function updateClub(Request $request, club $club) {


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

