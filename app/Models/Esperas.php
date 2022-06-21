<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esperas extends Model
{
    use HasFactory;
    protected $fillable=["idSocio","idPelicula","prioridad","fecha","estado"];
}
