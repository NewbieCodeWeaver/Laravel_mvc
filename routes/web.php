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

Route::get('/', IndexController::class); 


// Clubs

Route::get('clubs',[ClubController::class,'indexClub']);
Route::get('clubs/nuevo-club',[ClubController::class,'addClub']);
Route::post('clubs',[ClubController::class,'saveClub']);
Route::get('clubs/{club}',[ClubController::class,'showClub']);
Route::post('clubs/{club}/edit',[ClubController::class,'editClub']);
Route::put('clubs/{club}',[ClubController::class,'updateClub']);
Route::delete('clubs/{club}',[ClubController::class,'destroyClub']);

// Equipos

Route::get('equipos',[TeamController::class,'indexTeam']);
Route::get('equipos/nuevo-equipo',[TeamController::class,'addTeam']);
Route::post('equipos',[TeamController::class,'saveTeam']);
Route::get('equipos/{equipo}',[TeamController::class,'showTeam']);
Route::post('equipos/{equipo}/edit',[TeamController::class,'editTeam']);
Route::put('equipos/{equipo}',[TeamController::class,'updateTeam']);
Route::delete('equipos/{equipo}',[TeamController::class,'destroyTeam']);


// Partidos

Route::get('partidos',[MatchController::class,'indexMatch']);
Route::get('partidos/nuevo-partido',[MatchController::class,'addMatch']);
Route::post('partidos',[MatchController::class,'saveMatch']);
Route::get('partidos/{partido}',[MatchController::class,'showMatch']);
Route::post('partidos/{partido}/edit',[MatchController::class,'editMatch']);
Route::put('partidos/{partido}',[MatchController::class,'updateMatch']);
Route::delete('partidos/{partido}',[MatchController::class,'destroyMatch']);

