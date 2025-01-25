<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carpeta extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_carpeta';
    protected $table = 'carpetas';

    protected $fillable = [
        'id_evento',
        'id_google',
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento', 'id_evento');
    }
}
