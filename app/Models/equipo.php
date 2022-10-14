<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
      // Relacion uno a muchos (inversa)

      public function club()
      {
  
          return $this->belongsTo('App\Models\Club');
      }
  
  
      
      // Relacion uno a muchos
  
      public function partidos()
      {
  
          return $this->hasMany('App\Models\Partidos');
      }


      public function getAllteams() {


        $equipos = equipo::all();


        return $equipos;

      }


      public function getAllteamsWithPagination() {
        
        $equipos = equipo::join('clubs', 'equipos.club_id', '=', 'clubs.id')
        ->select('clubs.nombre as nombreclub','clubs.id','equipos.id','equipos.nombre','equipos.entrenador','equipos.division','equipos.estadio')
        ->paginate(5);

        return $equipos;

      }

      public function showTeam($equipo) {

        $equipos = equipo::join('clubs', 'equipos.club_id', '=', 'clubs.id')
        ->select('equipos.nombre', 'equipos.entrenador', 'equipos.division', 'equipos.estadio', 'clubs.nombre as nombreclub')
        ->where('equipos.id',"=",$equipo)
        ->get();

        return $equipos;


      }

  
}