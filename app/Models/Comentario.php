<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'Titulo',
        'Descripcion',
        'Foto',
        'Fecha',
        'Fecha_Visita',
        'local_id',
        'user_id',
    ];

}
