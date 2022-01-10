<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Triangulo extends Model
{
    protected $table = 'TRIANGULO';

    protected $fillable = [
        'BASE',
        'ALTURA',
    ];
}
