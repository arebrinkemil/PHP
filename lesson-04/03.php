<?php

$actors = [
    [
        'name' => 'Jason Alexander',
        'character' => 'George Costanza',
        'tmdb_url' => 'https://www.themoviedb.org/person/1206-jason-alexander',
    ],
    [
        'name' => 'Jerry Seinfeld',
        'character' => 'Jerry Seinfeld',
        'tmdb_url' => 'https://www.themoviedb.org/person/16377-jerry-seinfeld',
    ],
    [
        'name' => 'Julia Louis-Dreyfus',
        'character' => 'Elaine Benes',
        'tmdb_url' => 'https://www.themoviedb.org/person/15886-julia-louis-dreyfus',
    ],
    [
        'name' => 'Michael Richards',
        'character' => 'Cosmo Kramer',
        'tmdb_url' => 'https://www.themoviedb.org/person/50807-michael-richards',
    ],
];


foreach ($actors as $x => $val) {
    echo "$x = $val<br>";
}
