<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index( Request $peticion){
        $array = ['nombre' => $peticion -> query('nombre', 'NN')];
        return view('welcome')-> with($array);
    }
}
