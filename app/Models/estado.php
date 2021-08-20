<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_estado'
    ];
    public function categoria(){
        return $this->hasMany(categoria::class);
    }
    
    public function producto(){
        return $this->hasMany(producto::class);
    }


}
