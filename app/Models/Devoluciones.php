<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoluciones extends Model
{
    use HasFactory;
    protected $fillable=[
        "id_detalles_prestamos",
        "fechaDevolucion",
        "observaciones",
    ];
}
