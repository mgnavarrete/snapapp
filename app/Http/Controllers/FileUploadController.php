<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Imagen;

class FileUploadController extends Controller
{
    public function uploadImage(Request $request, $id)
    {
        // Validar los archivos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'imagenes' => 'required|array',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif|max:30720', // Máximo 30MB por imagen
        ]);

        // Generar la ruta dinámica: images/data/{id_evento}
        $directory = "images/data/{$id}";

        foreach ($request->file('imagenes') as $file) {
            // Depuración: Verificar el nombre del archivo
            logger()->info('Procesando archivo: ' . $file->getClientOriginalName());

            // Subir la imagen a la ruta dinámica
            try {
                $path = $file->store($directory, 'public');
                logger()->info('Imagen subida a: ' . $path);
            } catch (\Exception $e) {
                logger()->error('Error al subir la imagen: ' . $e->getMessage());
                return back()->with('error', 'Error al subir la imagen: ' . $e->getMessage());
            }

            // Obtener metadata de la imagen, para saber la fecha de captura
            $metadata = @exif_read_data($file->getPathname());
            $fecha_captura = $metadata['DateTimeOriginal'] ?? now();

            try {
                // Crear un nuevo registro en la tabla de imagenes
                $imagen = new Imagen();
                $imagen->id_evento = $id;
                $imagen->nombre = $request->input('nombre');
                $imagen->id_google = $path; // Guardar el path como id_google
                $imagen->fecha_captura = $fecha_captura;
                $imagen->link = $path; // Proporcionar un valor para 'link'
                $imagen->save();
                logger()->info('Registro creado en la base de datos para: ' . $file->getClientOriginalName());
            } catch (\Exception $e) {
                logger()->error('Error al guardar en la base de datos: ' . $e->getMessage());
                return back()->with('error', 'Error al guardar en la base de datos: ' . $e->getMessage());
            }
        }

        return back()->with('success', 'Imágenes subidas correctamente.');
    }
}
