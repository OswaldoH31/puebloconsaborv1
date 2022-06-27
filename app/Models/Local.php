<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'Distintivo',
        'Municipio',
        'Colonia',
        'Calle',
        'Numerolocal',
        'CP',
        'Telefono',
        'sitioweb',
        'email',
        'dietas_especiales',
        'rangoprecio',
        'categoria',
        'comidas',
        'destacado',
        'tipo_servicio',
        'precio',
        'tipo_establecimiento',
        'propina',
        'IVA',  
        'facturacion',
        'montofactura',
        'file',
        'estado',
        'user_id',
    ];


    
    public function scopeTipo_establecimiento($query,$Tipo_establecimiento)
    {
        if ($Tipo_establecimiento) {
            # code...
            return $query->where('Tipo_establecimiento','LIKE','%'.$Tipo_establecimiento.'%');

            
        }
    }

    public function scopeMunicipio($query,$Municipio)
    {
        if ($Municipio) {
            # code...
            return $query->where('Municipio','LIKE','%'.$Municipio.'%');
        }
    }

    public function scopeColonia($query,$Colonia)
    {
        if ($Colonia) {
            # code...
            return $query->where('Colonia','LIKE','%'.$Colonia.'%');
        }
    }



    public function scopeTipo_servicio($query,$Tipo_servicio)
    {
        if ($Tipo_servicio) {
            # code...
            return $query->where('tipo_servicio','LIKE','%'.$Tipo_servicio.'%');

            
        }
    }


    public function scopecomidas($query,$Comidas)
    {
        if ($Comidas) {
            # code...
            return $query->where('comidas','LIKE','%'.$Comidas.'%');
            
        }
    }


    public function scopePrecio($query,$Precio)
    {
        if ($Precio) {
            # code...
            return $query->where('precio','LIKE','%'.$Precio.'%');
            
        }
    }

    

}
