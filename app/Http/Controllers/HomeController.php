<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* Invoke solo administra 1 ruta */
    public function __invoke()
    {
        return view('home');
    }
}
