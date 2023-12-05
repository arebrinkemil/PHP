<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

define('GIPHY_KEY', 'tNki9EJTcyUZW6VXKBx8bZLMEQkClfCC');

function searchGiphy($query)
{
    $client = new Client();
    $response = $client->request('GET', 'http://api.giphy.com/v1/gifs/search', [
        'query' => [
            'q' => $query,
            'api_key' => GIPHY_KEY,
            'limit' => 5

        ]
    ]);
    return json_decode($response->getBody(), true);
}

$gifs = [];
if (!empty($_POST['search'])) {
    $gifs = searchGiphy($_POST['search']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.5/spectre.min.css">
</head>

<body>
    <div class="container grid-sm">
        <form class="columns my-2" action="giffy.php" method="post">
            <div class="column col-9">
                <input type="search" name="search" placeholder="Search gifs..." class="form-input">
            </div>
            <div class="column col-3">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </form>
        <div class="columns my-2">
            <?php foreach ($gifs['data'] as $gif) : ?>
                <div class="column col-12 my-1">
                    <img src="<?= $gif['images']['downsized']['url'] ?>" width="100%">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>