<?php

declare(strict_types=1);

$actors = [
    'Abigail Savage',
    'Adrienne C. Moore',
    'Danielle Brooks',
    'Dascha Polanco',
    'Jackie Cruz',
    'Kate Mulgrew',
    'Kimiko Glenn',
    'Laura Prepon',
    'Lea DeLaria',
    'Michael Harney',
    'Nick Sandow',
    'Selenis Leyva',
    'Taryn Manning',
    'Taylor Schilling',
    'Uzo Aduba',
    'Yael Stone',
];

$actors = array_filter($actors, function ($actorName) {
    return substr($actorName, 0, 1) === "K";
});

var_dump($actors);
