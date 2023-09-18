<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bezerro extends Model
{
    use HasFactory;

    protected $fillable = [
        'brinco',
        'cor_brinco',
        'sexo',
        'procedencia',
        'mae',
        'data_nascimento',
        'raca',
        'peso_nascimento',
        'peso_atual',
        'peso_desmame',
        'preco_compra',
        'desmame',
        'fazenda',
        'vacinas',
        'observacoes'
    ];
}
