<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    use HasFactory;


    // Relacion uno a muchos (inversa)

    public function equipo()
    {

        return $this->belongsTo('App\Models\Equipo');
    }

    
}
