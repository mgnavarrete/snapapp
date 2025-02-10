<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Seccion;
use App\Models\Imagen;

class GaleriaController extends Controller
{
    public function show($id)

    {
        $id_evento = $id;

        $evento = Evento::findOrFail($id);

        $secciones = Seccion::with('evento')->where('id_evento', $id)->orderBy('fecha_inicio', 'asc')->get();

        $imagenes = Imagen::where('id_evento', $id)->get();

        // separa las imagenes por seccion donde seccion tiene fecha_inicio y fecha_final y la imagen tiene fecha_capura la cual debe estar entre las fechas de la seccion para considerarse de la seccion
        $imagenes_por_seccion = [];
        foreach ($secciones as $seccion) {
            $imagenes_por_seccion[$seccion->id] = $imagenes->whereBetween('fecha_captura', [$seccion->fecha_inicio, $seccion->fecha_final]);
        }
        // Pasar los datos a la vista
        return view('pages.galeria', compact('id_evento', 'evento', 'secciones', 'imagenes_por_seccion', 'imagenes'));
    }
}
