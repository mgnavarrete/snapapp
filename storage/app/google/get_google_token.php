<?php

require 'vendor/autoload.php';

use Google\Client;

function getClient()
{
    $client = new Client();
    $client->setAuthConfig(__DIR__ . '/client_secrets.json'); // Usa __DIR__ para obtener la ruta del directorio actual
    $client->addScope(Google\Service\Drive::DRIVE_FILE);
    $client->setAccessType('offline'); // Solicitar acceso offline para obtener un refresh token
    $client->setPrompt('consent'); // Forzar el consentimiento para obtener un refresh token
    $client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');

    // Solicitar autorización
    $authUrl = $client->createAuthUrl();
    printf("Abre el siguiente enlace en tu navegador:\n%s\n", $authUrl);
    print 'Introduce el código de verificación: ';
    $authCode = trim(fgets(STDIN));

    // Intercambiar el código de autorización por un token de acceso
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Verificar si el refresh token está presente
    if (!isset($accessToken['refresh_token'])) {
        throw new \Exception('No se pudo obtener el refresh token. Asegúrate de solicitar acceso offline.');
    }

    $client->setAccessToken($accessToken);

    // Guardar el token de acceso para su uso futuro
    if (!file_exists(dirname('token.json'))) {
        mkdir(dirname('token.json'), 0700, true);
    }
    file_put_contents('token.json', json_encode($accessToken));

    return $client;
}

$client = getClient();
echo "Token de acceso guardado en 'token.json'.\n";
