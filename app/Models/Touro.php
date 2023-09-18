<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touro extends Model
{
    use HasFactory;

    protected $fillable = [
        'brinco',
        'cor_brinco',
        'peso_atual',
        'procedencia',
        'raca',
        'preco_compra',
        'mae',
        'fazenda',
        'vacinas',
        'observacoes'
    ];
}
