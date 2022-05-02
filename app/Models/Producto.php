<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';

    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(\App\Models\Sucursal::class, 'sucursal_id');
    }

    public function fechaTransformTo($date)
    {
        //Y-m-d a m/d/Y
        $fecha = explode('-',$date);
        $day = explode(' ', $fecha[2]);
        $new_fecha = $fecha[1] . '/' . $day[0] . '/' . $fecha[0];
        return $new_fecha;
    }
}
