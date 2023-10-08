<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';
    // Campos que se pueden llenar masivamente
    protected $fillable = ['nombre', 'email', 'telefono', 'lugar'];
}
