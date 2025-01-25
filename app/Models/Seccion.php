<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seccion extends Model
{
    use  HasFactory;

    protected $table = 'secciones';
    protected $primaryKey = 'id_seccion';


    protected $fillable = [
        'id_evento',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_final',
        'path_img',
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento', 'id_evento');
    }
}
