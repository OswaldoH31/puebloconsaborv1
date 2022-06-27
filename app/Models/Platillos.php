<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillos extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Costo',
        'Imagen',
        'local_id',
    ];

}
