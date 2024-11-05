<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;


    // Relacion uno a muchos

    public function equipos()
    {

        return $this->hasMany('App\Models\Equipos');
    }


    public function getAllClubs()
    {

        $clubs = Club::paginate(5);

        if ($clubs) return $clubs;
    }

    public function getClubsImg()
    {

        $clubsImg = Club::pluck('foto_perfil');

        if ($clubsImg) return $clubsImg;
    }
}
