<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    use HasFactory;


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


}