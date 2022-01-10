<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triangulo;

class TrianguloController extends Controller
{
    public function store(Request $request){
        Triangulo::create($request->all());
    }

    public function index(){
        $MEDIDAS = Triangulo::all();
        $area = 0;
        foreach($MEDIDAS as $retangulo){
            $area += ((abs($retangulo['BASE']) * abs($retangulo['ALTURA'])) / 2);
        }

        return $area;
    }
}
