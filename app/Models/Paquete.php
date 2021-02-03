<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    
    protected $table = 'paquete';
    
    protected $fillable = ['idcamionero', 'precio', 'descripcion'];
    
    function camionero() {
        return $this->belongsTo('App\Models\Camionero', 'idcamionero');
    }
    
    
}
