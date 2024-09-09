<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';
    protected $primaryKey = 'id';  // Asegúrate de que este campo esté correctamente definido
    public $incrementing = true;   // Asegúrate de que esté bien configurado si usas auto-incremento
    protected $fillable = ['nombre'];
    public $timestamps = true;
}
