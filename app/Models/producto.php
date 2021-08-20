<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'precio_venta',
        'Marca',
        'existencia',
        'id_estado',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function estado(){
        return $this->belongsTo(estado::class);
    }

    public function image(){
        return $this->morphOne(image::class, 'imagen');
    }
}
