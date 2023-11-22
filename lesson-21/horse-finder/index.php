<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

$client = new Client([
    'base_uri' => 'http://localhost:7000',
]);

try {
    $response = $client->request('GET', '/02.php', [
        'query' => [
            'id' => 'a992e0'
        ]
    ]);
    echo $response->getBody()->getContents();
} catch (ClientException $e) {
    echo $e->getMessage();
}
