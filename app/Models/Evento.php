<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{
    use  HasFactory;

    protected $table = 'eventos';
    protected $primaryKey = 'id_evento';


    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_final',
        'path_img',
    ];
}
