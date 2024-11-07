<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;


    // Relacion uno a muchos (inversa)

    public function equipo()
    {

        return $this->belongsTo('App\Models\Equipo');
    }


    public function getAllMatches()
    {

        $partidos = Partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
            ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
            ->select('equipolocal.nombre as local', 'equipovisitante.nombre as visitante', 'partidos.*')
            ->orderBy('fecha', 'desc')
            ->paginate(5);

        if ($partidos) return $partidos;
    }


    public function getMatchDetails($partido)
    {
        $partidos = Partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
            ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
            ->join('clubs as clublocal', 'equipolocal.club_id', '=', 'clublocal.id')
            ->join('clubs as clubvisitante', 'equipovisitante.club_id', '=', 'clubvisitante.id')
            ->select(
                'equipolocal.nombre as local',
                'equipovisitante.nombre as visitante',
                'partidos.hora',
                'partidos.fecha',
                'partidos.ubicacion',
                'partidos.id',
                'clublocal.foto_perfil as localClubImg',
                'clubvisitante.foto_perfil as visitanteClubImg'
            )
            ->where('partidos.id', '=', $partido)
            ->first();

        if ($partidos) return $partidos;
    }

    public function getPendingMatches()
    {
        $currentDate = Carbon::now()->format('d-m-y');
        $currentTime = Carbon::now()->format('H:i:s');

        $partidos = Partido::join('equipos as equipolocal', 'partidos.equipo_local', '=', 'equipolocal.id')
            ->join('equipos as equipovisitante', 'partidos.equipo_visitante', '=', 'equipovisitante.id')
            ->select('equipolocal.nombre as local', 'equipovisitante.nombre as visitante', 'partidos.*')
            ->where(function ($query) use ($currentDate, $currentTime) {
                $query->whereRaw("STR_TO_DATE(fecha, '%d-%m-%y') > STR_TO_DATE(?, '%d-%m-%y')", [$currentDate])
                    ->orWhere(function ($query) use ($currentDate, $currentTime) {
                        $query->whereRaw("STR_TO_DATE(fecha, '%d-%m-%y') = STR_TO_DATE(?, '%d-%m-%y')", [$currentDate])
                            ->whereRaw("STR_TO_DATE(hora, '%H:%i:%s') > STR_TO_DATE(?, '%H:%i:%s')", [$currentTime]);
                    });
            });

        if ($partidos) return $partidos->get();
    }

    public function countMatches()
    {
        $numeroPartidos = Partido::all()->count();

        if ($numeroPartidos) return $numeroPartidos;
    }
}
