
<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new Client();

$response = $client->request('POST', 'http://yrgopelag.se/test/index.php', [
    'form_params' => [
        'startCode' => 'bad0ecb0-399d-48d8-88ee-15ac509e19e4'
    ]
]);

$body = $response->getBody();
$json = json_decode($body, true);
$password = $json['password'];

$file = fopen('.env', 'a');
fwrite($file, "\nAPI_KEY=$password");
fclose($file);

$dotenv->load();
echo $_ENV['API_KEY'];
