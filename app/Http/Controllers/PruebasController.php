<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;


class PruebasController extends Controller
{
    public function listar(){
        $Marcas = Marca::all();
        dd($Marcas);
    }
}
