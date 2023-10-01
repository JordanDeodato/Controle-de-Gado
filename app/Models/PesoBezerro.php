<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesoBezerro extends Model
{
    use HasFactory;

    protected $fillable = [
        'bezerro_id',
        'peso',
        'data_pesagem'
    ];
}
