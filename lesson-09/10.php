<?php

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];




foreach ($actors as $actor) {
    $yearBorn = $actor[1];

    switch ($yearBorn) {
        case ($yearBorn >= 1990 && $yearBorn < 2000):
            echo "$actor[0] was born in the nineties." . "<br />";
            break;
        case ($yearBorn >= 1980 && $yearBorn < 1990):
            echo "$actor[0] was born in the eighties." . "<br />";
            break;
        case ($yearBorn >= 1970 && $yearBorn < 1980):
            echo "$actor[0] was born in the seventies." . "<br />";
            break;
        case ($yearBorn >= 1960 && $yearBorn < 1970):
            echo "$actor[0] was born in the sixties." . "<br />";
            break;
        case ($yearBorn >= 1950 && $yearBorn < 1960):
            echo "$actor[0] was born in the fifthies." . "<br />";
            break;
        case ($yearBorn >= 1940 && $yearBorn < 1950):
            echo "$actor[0] was born in the fourties." . "<br />";
            break;
    }
}
