<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPrestamo extends Model
{
    use HasFactory;
    protected $fillable=['idPrestamo',"idSocio","idCinta"];
}
