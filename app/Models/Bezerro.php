<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bezerro extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacao',
        'peso',
        'animal',
        'idade',
        'raca',
        'mae_id',
        'peso_nasc',
        'peso_desmame',
        'vacinas',
    ];
}
