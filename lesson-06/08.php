<?php

$actors = [
    ['name' => 'Andie MacDowell', 'year' => 1958],
    ['name' => 'Bill Murray', 'year' => 1950],
    ['name' => 'Chris Elliot', 'year' => 1960],
    ['name' => 'Stephen Tobowsky', 'year' => 1951],
];


$x = count($actors);


for ($i = 0; $i < $x; $i++) {
    echo $actors[$i]['name'], " was born ", $actors[$i]['year'] . "<br />";
};
