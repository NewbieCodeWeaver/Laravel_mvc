<?php

namespace App\Http\Controllers;

use App\Models\partido;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {

        $partidos = partido::all();

        return $partidos;

        return view('index');

    }
}
