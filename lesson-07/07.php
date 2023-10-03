<?php

$actors = [
    ['name' => 'Ally Sheedy ', 'year' => 1962],
    ['name' => 'Anthony Michael Hall', 'year' => 1968],
    ['name' => 'Emilio Estevez', 'year' => 1962],
    ['name' => 'Judd Nelson', 'year' => 1959],
    ['name' => 'Molly Ringwald', 'year' => 1968],
];


foreach ($actors as $key => $actor) {
    echo $actor['name']  . "<br />";
    if ($actor['year'] == 1968) {
        break;
    }
}
