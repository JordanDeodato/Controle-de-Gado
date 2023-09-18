<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaca extends Model
{
    use HasFactory;

    protected $fillable = [
        'brinco',
        'cor_brinco',
        'categoria',
        'procedencia',
        'idade',
        'raca',
        'preco_compra',
        'paricoes',
        'data_primeira_cria',
        'data_ultima_cria',
        'fazenda',
        'vacinas',
        'observacoes'
    ];
}
