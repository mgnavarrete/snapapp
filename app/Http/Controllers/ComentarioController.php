<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{

    public function create(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'comentario' => 'required|string',
        ]);

        try {

            $comentario = Comentario::create([
                'id_evento' => $id,
                'nombre' => $validatedData['nombre'],
                'contenido' => $validatedData['comentario'],

            ]);

            // Redirigir a la vista de pacientes con un mensaje de éxito
            return redirect()->route('eventoShow', $id)->with('success', 'Comentario creado exitosamente.');
        } catch (\Exception $e) {
            logger()->error('Error al crear el comentario: ' . $e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error' => 'Error al crear el comentarsio. ' . $e->getMessage()]);
        }
    }
}
