<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
   
    public $timestamps= false;
    protected $fillable= ['documento_identidad','nombre_est','apellido_est','email_est','telefono_est','nombre_acu','telefono_acu'];
}

