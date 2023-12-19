<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteBezerro extends Model
{
    use HasFactory;

    protected $fillable = [
        "lote_id",
        "bezerro_id"
    ];
}
