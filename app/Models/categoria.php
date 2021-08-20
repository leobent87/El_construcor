<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_categoria',
        'descripcion_categoria',
        'id_estado'
    ];

    //relacion con tabla producto
    public function producto(){
        return $this->hasMany(producto::class);
    }

    public function estado(){
        return $this->belongsTo(estado::class);
    }
}
