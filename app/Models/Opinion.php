<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Calificacion_General',
        'Titulo_Opinion',
        'Fecha',
        'Opinion',
        'Tipo_Visita',
        'Razon_Visita',
        'Fecha_Visita',
        'Cal_Comida',
        'Cal_Servicio',
        'Cal_Calidad',
        'Cal_Ambiente',
        'Precio',
        'Recomendacion',
        'Foto',
        'Certifico',
        'local_id',
        'user_id',
    ];
}
