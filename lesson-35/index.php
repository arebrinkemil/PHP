<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;

$database = require __DIR__ . '/bootstrap.php';




// $pokemon = $database->select()->from('pokemon')->get();

// printf('There are %d pokemon in the database.', count($pokemon));

// $pokemon = $database->select()->from('pokemon')->limit(5)->get();

// echo count($pokemon);


// $pokemon = $database->select()->from('pokemon')->orderBy('name', 'asc')->limit(3)->get();

// print_r($pokemon);



// $pokemon = $database->select()->from('pokemon')->orderBy('name', 'desc')->first();

// echo $pokemon->name;


$pokemon = $database->select()->from('pokemon')->where('id', '=', '18')->first();

echo $pokemon->name;
