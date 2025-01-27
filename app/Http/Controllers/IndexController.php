<?php

namespace App\Http\Controllers;

use App\Models\Evento;

class IndexController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        // Pasar los datos a la vista
        return view('pages.landingIndex', compact('eventos'));
    }
}
