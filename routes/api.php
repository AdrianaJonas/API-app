<?php

Route::post('/Retangulo', 'App\Http\Controllers\RetanguloController@store');

Route::post('/Triangulo', 'App\Http\Controllers\TrianguloController@store');

Route::get('/Area', 'App\Http\Controllers\AreaController@index');