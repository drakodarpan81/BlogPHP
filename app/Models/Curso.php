<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name', 'descripcion', 'categoria']; // Guarda solo los campos establecidos
    //protected $guarded = ['status']; // No guarda el campo establecido
    protected $guarded = [];
}
