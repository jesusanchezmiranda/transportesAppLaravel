<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    use HasFactory;
    
    protected $table = 'camionero';
    
    public $timestamps = false;
    
    protected $fillable = ['foto', 'nombre', 'telefono', 'salario', 'poblacion'];
    
    function paquetes() {
        return $this->hasMany('App\Models\Paquete', 'idcamionero');
    }
}
