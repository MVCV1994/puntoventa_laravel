<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente de la pluralización automática)
    protected $table = 'sales';

    // Los campos que se pueden asignar masivamente (si es necesario)
    protected $fillable = [
        'product_id',
        'quantity',
        'total',
        // Agrega otros campos según sea necesario
    ];
}
