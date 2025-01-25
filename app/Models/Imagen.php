<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagen extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_imagen';
    protected $table = 'imagenes';

    protected $fillable = [
        'id_evento',
        'link',
        'id_google',
        'fecha_captura',
        'nombre',
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento', 'id_evento');
    }
}
