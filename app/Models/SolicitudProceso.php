<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudProceso extends Model
{
    use HasFactory;

    protected $table = 'solicitud_proceso';

    protected $fillable = [
        'clave',
        'total_item',
        'costo',
        'fecha_produccion',
        'items'
    ];

    public function articulos()
    {
        return $this->hasMany('App\Models\Articulo');
    }
}
