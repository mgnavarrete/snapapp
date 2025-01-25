<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_comentario';

    protected $table = 'comentarios';

    protected $fillable = [
        'id_evento',
        'nombre',
        'contenido',
        'created_at',
        'updated_at'
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento', 'id_evento');
    }
}
