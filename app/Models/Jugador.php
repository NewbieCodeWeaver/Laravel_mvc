<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'jugadores';

    public function equipo()
    {
        return $this->belongsTo(equipo::class);
    }


    public function getAllPlayers()
    {

        $jugadores = Jugador::all()->paginate(5);

        if ($jugadores) return $jugadores;
    }


    public function getAllPlayerByScore()
    {

        $jugadores = Jugador::orderBy('score', 'desc')->take(5)->get();

        return $jugadores;
    }

    public function getBestPlayer()
    {

        $bestPlayer = Jugador::orderBy('score', 'asc')->first();

        if ($bestPlayer) return $bestPlayer->nombre;
    }

    public function getWorstPlayer()
    {

        $worstPlayer = Jugador::orderBy('score', 'desc')->first();

        if ($worstPlayer) return $worstPlayer->nombre;
    }

    public function countPlayers()
    {
        $jugadores = Jugador::all()->count();

        if ($jugadores) return $jugadores;
    }

    public function countGoals()
    {
        $numeroGoles = Jugador::sum('goles');

        if ($numeroGoles) return $numeroGoles;
    }
}
