<?php

$actors = [
    ['name' => 'Andie MacDowell', 'year' => 1958],
    ['name' => 'Bill Murray', 'year' => 1950],
    ['name' => 'Chris Elliot', 'year' => 1960],
    ['name' => 'Stephen Tobowsky', 'year' => 1951],
];

var_dump($actors[0]['name']);
echo $actor[1]['name'];

foreach ($actors as $key => $actor) {
    echo $actor[1]['name'];
};
