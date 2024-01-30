<?php

declare(strict_types=1);

use App\Pokemon;
use App\Exceptions\NotFoundException;

$id = $_GET['id'] ?? 1;

$pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->get();

if ($pokemon === null) {
    throw new NotFoundException("Pokemon with ID {$id} not found");
}

$pokemon = array_map(function ($monster) {
    return new Pokemon((int) $monster->id, $monster->name);
}, $pokemon);


require view('pokemon');
