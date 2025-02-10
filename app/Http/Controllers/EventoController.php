<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Seccion;
use App\Models\Comentario;
use App\Models\Imagen;

class EventoController extends Controller
{
    public function show($id)

    {
        $id_evento = $id;

        $evento = Evento::findOrFail($id);

        $secciones = Seccion::with('evento')->where('id_evento', $id)->orderBy('fecha_inicio', 'asc')->get();

        $comentarios = Comentario::with('evento')->where('id_evento', $id)->orderBy('created_at', 'desc')->get();

        $imagenes = Imagen::where('id_evento', $id)->get();


        // Pasar los datos a la vista
        return view('pages.eventoShow', compact('id_evento', 'evento', 'secciones', 'comentarios', 'imagenes'));
    }
}
