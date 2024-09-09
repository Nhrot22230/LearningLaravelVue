<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Especifica la tabla que usa este modelo
    protected $table = 'usuario';

    // Especifica la clave primaria
    protected $primaryKey = 'dni';

    // Especifica si la clave primaria es un entero autoincremental (false en este caso)
    public $incrementing = false;

    // Especifica el tipo de la clave primaria
    protected $keyType = 'string';

    // Especifica los atributos que son asignables en masa
    protected $fillable = ['dni', 'nombre', 'apellido', 'edad'];

    // Desactiva las marcas de tiempo si no las necesitas
    public $timestamps = true;

    // Puedes agregar métodos adicionales para la lógica específica de este modelo aquí
}
