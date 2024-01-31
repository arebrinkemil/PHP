<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Http\Router;
use App\Http\Request;

$database = require __DIR__ . '/bootstrap.php';



$router = new Router([
    '/' => __DIR__ . '/controllers/pokedex.php',
    '/pokemon' => __DIR__ . '/controllers/pokemon.php',
]);


try {
    require $router->direct(App\Http\Request::uri());
} catch (\App\Exceptions\NotFoundHttpException $e) {
    echo $e->getMessage();
    require view('404');
}







// $pokemon = $database->select()->from('pokemon')->get();

// printf('There are %d pokemon in the database.', count($pokemon));

// $pokemon = $database->select()->from('pokemon')->limit(5)->get();

// echo count($pokemon);


// $pokemon = $database->select()->from('pokemon')->orderBy('name', 'asc')->limit(3)->get();

// print_r($pokemon);



// $pokemon = $database->select()->from('pokemon')->orderBy('name', 'desc')->first();

// echo $pokemon->name;


// $pokemon = $database->select()->from('pokemon')->where('id', '=', '18')->first();

// echo $pokemon->name;
