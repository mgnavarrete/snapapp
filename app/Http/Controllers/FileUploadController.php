<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Imagen;
use Google\Client;
use Google\Service\Drive;
use App\Models\Carpeta;

class FileUploadController extends Controller
{
    public function uploadImage(Request $request, $id)
    {

        // dd($request->all());
        // Validar los archivos
        $request->validate([
            'nombre' => 'string|max:255',
            'imagenes' => 'required|array',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif', // Máximo 30MB por imagen
        ]);

        $carpeta = Carpeta::where('id_evento', $id)->first();
        $id_carpeta = $carpeta->id_google;
        // Configurar el cliente de Google
        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/client_secrets.json')); // Ruta segura al archivo client_secrets.json
        $client->addScope(Drive::DRIVE_FILE);


        // Cargar el token de acceso desde el archivo
        if (file_exists(storage_path('app/google/token.json'))) {
            try {
                $accessToken = json_decode(file_get_contents(storage_path('app/google/token.json')), true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    throw new \Exception('Error al decodificar el token JSON: ' . json_last_error_msg());
                }
                $client->setAccessToken($accessToken);
            } catch (\Exception $e) {
                logger()->error('Error al establecer el token de acceso: ' . $e->getMessage());
                throw new \Exception('Token de acceso no válido. Por favor, regenera el token.');
            }
        } else {
            throw new \Exception('Token de acceso no encontrado. Asegúrate de haber ejecutado el script de autenticación.');
        }

        // Verificar si el token ha expirado y refrescarlo si es necesario
        if ($client->isAccessTokenExpired()) {
            logger()->warning('El token de acceso ha expirado, intentando refrescar.');
            if ($client->getRefreshToken()) {

                $newAccessToken = $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                file_put_contents(storage_path('app/google/token.json'), json_encode($newAccessToken));
                $client->setAccessToken($newAccessToken);
            } else {

                logger()->error('No se puede refrescar el token de acceso.');
                throw new \Exception('Token de acceso expirado y no se puede refrescar.');
            }
        }

        $service = new Drive($client);

        foreach ($request->file('imagenes') as $file) {
            dd("Se conecto a drive");
            // Depuración: Verificar el nombre del archivo
            logger()->info('Procesando archivo: ' . $file->getClientOriginalName());


            // Obtener metadata de la imagen, para saber la fecha de captura
            $metadata = @exif_read_data($file->getPathname());

            $fecha_captura = $metadata['DateTimeOriginal'] ?? now();


            try {
                // Subir la imagen a Google Drive
                logger()->info('Intentando subir archivo a Google Drive: ' . $file->getClientOriginalName());
                $fileMetadata = new Drive\DriveFile([
                    'name' => $file->getClientOriginalName(),
                    'parents' => [$id_carpeta] // ID de la carpeta en Google Drive
                ]);

                $content = file_get_contents($file->getPathname());

                $driveFile = $service->files->create($fileMetadata, [
                    'data' => $content,
                    'mimeType' => $file->getMimeType(),
                    'uploadType' => 'multipart',
                    'fields' => 'id'
                ]);

                logger()->info('Archivo subido exitosamente con ID: ' . $driveFile->id);

                $googleDriveFileId = $driveFile->id;

                // Guardar el ID de Google Drive en la base de datos
                $imagen = new Imagen();
                $imagen->id_evento = $id;
                $imagen->nombre = $request->input('nombre');
                $imagen->id_google = $googleDriveFileId; // Guardar el ID de Google Drive
                $imagen->fecha_captura = $fecha_captura;
                $imagen->link = "https://drive.google.com/file/d/{$googleDriveFileId}/view"; // Enlace a la imagen
                $imagen->save();

                logger()->info('Imagen subida a Google Drive con ID: ' . $googleDriveFileId);
            } catch (\Exception $e) {
                logger()->error('Error al subir la imagen a Google Drive: ' . $e->getMessage());
                return back()->with('error', 'Error al subir la imagen a Google Drive: ' . $e->getMessage());
            }
        }

        return back()->with('success', 'Imágenes subidas correctamente :)');
    }
}
