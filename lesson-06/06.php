<?php

$actors = [
    ['name' => 'Andie MacDowell', 'year' => 1958],
    ['name' => 'Bill Murray', 'year' => 1950],
    ['name' => 'Chris Elliot', 'year' => 1960],
    ['name' => 'Stephen Tobowsky', 'year' => 1951],
];


foreach ($actors as $key => $actor) {
    echo $actor['name'];
    echo $actor['year'];
};
