<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Especifica la tabla que usa este modelo
    protected $table = 'rol';

    // Especifica los atributos que son asignables en masa
    protected $fillable = ['nombre'];

    // Desactiva las marcas de tiempo si no las necesitas
    public $timestamps = true;

    // Puedes agregar métodos adicionales para la lógica específica de este modelo aquí
}
