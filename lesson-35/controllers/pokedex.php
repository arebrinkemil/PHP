<?php


declare(strict_types=1);

use App\Pokemon;

$pokemon = $database->select()->from('pokemon')->get();
$pokemon = array_map(function ($pokemon) {
    return new Pokemon($pokemon->id, $pokemon->name);
}, $pokemon);
require view('pokedex');
