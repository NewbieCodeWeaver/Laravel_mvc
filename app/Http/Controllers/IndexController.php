<?php

namespace App\Http\Controllers;

use App\Models\partido;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $modeloPartido = new partido();
        $partidos = $modeloPartido->getMatchIndex();

        $date = Carbon::now()->toDateString();

        return view('index', compact('partidos', 'date'));
    }
}
