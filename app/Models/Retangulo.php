<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retangulo extends Model
{
    protected $table = 'RETANGULO';

    protected $fillable = [
        'BASE',
        'ALTURA',
    ];
}
