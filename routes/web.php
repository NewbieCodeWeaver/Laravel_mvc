<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index

Route::get('/', IndexController::class)->name('index'); 


// Clubs

Route::get('clubs',[ClubController::class,'indexClub'])->name('club.index');
Route::get('clubs/nuevo-club',[ClubController::class,'addClub'])->name('club.add');
Route::post('clubs/nuevo-club',[ClubController::class,'saveClub'])->name('club.save');
Route::get('clubs/{club}',[ClubController::class,'showClub'])->name('club.show');
Route::get('clubs/{club}/edit',[ClubController::class,'editClub'])->name('club.edit');
Route::put('clubs/{club}',[ClubController::class,'updateClub'])->name('club.update');
Route::delete('clubs/{club}',[ClubController::class,'destroyClub'])->name('club.destroy');

// Equipos

Route::get('equipos',[TeamController::class,'indexTeam'])->name('equipos.index');
Route::get('equipos/nuevo-equipo',[TeamController::class,'addTeam'])->name('equipos.add');
Route::post('equipos/nuevo-equipo',[TeamController::class,'saveTeam'])->name('equipos.save');
Route::get('equipos/{equipo}',[TeamController::class,'showTeam'])->name('equipos.show');
Route::get('equipos/{equipo}/edit',[TeamController::class,'editTeam'])->name('equipos.edit');
Route::put('equipos/{equipo}',[TeamController::class,'updateTeam'])->name('equipos.update');
Route::delete('equipos/{equipo}',[TeamController::class,'destroyTeam'])->name('equipos.destroy');


// Partidos

Route::get('partidos',[MatchController::class,'indexMatch'])->name('partido.index');
Route::get('partidos/nuevo-partido',[MatchController::class,'addMatch'])->name('partido.add');
Route::post('partidos/nuevo-partido',[MatchController::class,'saveMatch'])->name('partido.save');
Route::get('partidos/{partido}',[MatchController::class,'showMatch'])->name('partido.show');
Route::get('partidos/{partido}/edit',[MatchController::class,'editMatch'])->name('partido.edit');
Route::put('partidos/{partido}/',[MatchController::class,'updateMatch'])->name('partido.update');
Route::delete('partidos/{partido}',[MatchController::class,'destroyMatch'])->name('partido.destroy');

