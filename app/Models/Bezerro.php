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

    public function vaca()
    {
        return $this->belongsTo(Vaca::class);
    }

    public function peso()
    {
        return $this->hasMany(PesoBezerro::class, 'bezerro_id');
    }
}
