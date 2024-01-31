<?php

declare(strict_types=1);

use App\Pokemon;
use App\Exceptions\NotFoundException;

$id = $_GET['id'] ?? 1;

$pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->get();

$pokemon = $pokemon[0];

if ($pokemon === null) {
    throw new NotFoundException("Pokemon with ID {$id} not found");
}

$pokemon = new Pokemon((int) $pokemon->id, $pokemon->name);


require view('pokemon');
