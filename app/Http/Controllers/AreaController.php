<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RetanguloController;
use App\Http\Controllers\TrianguloController;

class AreaController extends Controller
{
    public function index(){
        return RetanguloController::index() + TrianguloController::index();
    }
}
