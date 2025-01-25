<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {

        // Pasar los datos a la vista
        return view('pages.landingIndex');
    }
}
