<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaca extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacao',
        'peso',
        'animal',
        'category',
        'prenha',
        'idade',
        'raca',
        'procedencia',
        'prenha',
        'crias',
        'precoCompra',
        'data_primeira_cria',
        'data_ultima_cria',
        'data_desmame',
        'vacinas',
    ];
}
