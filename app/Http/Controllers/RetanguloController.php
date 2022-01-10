<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retangulo;

class RetanguloController extends Controller
{
    public function store(Request $request){
        Retangulo::create($request->all());
    }

    public function index(){
        $MEDIDAS = Retangulo::all();
        $area = 0;
        foreach($MEDIDAS as $retangulo){
            $area += (abs($retangulo['BASE']) * abs($retangulo['ALTURA']));
        }

        return $area;
    }
}
