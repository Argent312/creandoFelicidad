<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class semaforoController extends Controller
{
    public function conciertos()
    {
        return view('conciertos');
    }
    public function musica()
    {
        return view('musica');
    }
    public function eventos()
    {
        return view('eventos');
    }
}
