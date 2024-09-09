<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    // Especifica la tabla que usa este modelo
    protected $table = 'cuenta';

    // Especifica los atributos que son asignables en masa
    protected $fillable = ['rol', 'usuario', 'password', 'saldo'];

    // Desactiva las marcas de tiempo si no las necesitas
    public $timestamps = true;

    // Define las relaciones con otros modelos
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario', 'dni');
    }
}

