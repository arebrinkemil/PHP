<?php


declare(strict_types=1);

use App\Pokemon;

$pokemon = $database->select()->from('pokemon')->get();
$pokemon = array_map(function ($monster) {
    return new Pokemon((int) $monster->id, $monster->name);
}, $pokemon);
require view('pokedex');
