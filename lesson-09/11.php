<?php

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];

foreach ($actors as $actor) {
    $age = $actor[1];

    $result = match (true) {
        $age >= 1990 => "$actor[0] was born in the nineties.",
        $age >= 1980 => "$actor[0] was born in the eighties.",
        $age >= 1970 => "$actor[0] was born in the seventies.",
        $age >= 1960 => "$actor[0] was born in the sixties.",
        $age >= 1950 => "$actor[0] was born in the eighties.",
        default => 'other',
    };

    echo $result . "<br />";
}
