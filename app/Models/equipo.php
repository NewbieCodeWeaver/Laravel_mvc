<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
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


  public function getAllTeams()
  {

    $equipos = equipo::join('clubs', 'equipos.club_id', '=', 'clubs.id')
      ->select('clubs.nombre as nombreClub', 'equipos.*')
      ->paginate(5);

    if ($equipos) return $equipos;
  }
}
