<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;


    // Relacion uno a muchos

    public function equipos()
    {

        return $this->hasMany('App\Models\Equipos');
    }

    public function getClub($club) {


        $club = club::all()
        ->where('id', "=", $club)
        ->first();

        return $club;

    }


    public function getAllClubs() {
    
        $clubs = club::paginate(5);

            return $clubs;


    }


}