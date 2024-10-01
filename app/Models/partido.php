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


    public function getMatchIndex()
    {


        $partidos = partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
            ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
            ->select('equipolocal.nombre as Local', 'equipovisitante.nombre as Visitante', 'partidos.hora', 'partidos.fecha', 'partidos.ubicacion', 'partidos.resultado', 'partidos.id')
            ->orderBy('fecha', 'desc')
            ->paginate(10);


        return $partidos;
    }


    public function getPartido($partido)
    {


        $partidos = partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
            ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
            ->select('equipolocal.nombre as Local', 'equipovisitante.nombre as Visitante', 'partidos.hora', 'partidos.fecha', 'partidos.ubicacion', 'partidos.resultado', 'partidos.id')
            ->where('partidos.id', "=", $partido)
            ->get();


        return $partidos;
    }
}
