<?php

$currentYear = date('Y');

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];


foreach ($actors as $actor) {

    $age = $currentYear - $actor[1];


    if ($age >= 20 && $age < 30) {
        echo "$actor[0] is in his/hers twenties." . "<br />";
    } elseif ($age >= 30 && $age < 40) {
        echo "$actor[0] is in his/hers thirties." . "<br />";
    } elseif ($age >= 40 && $age < 50) {
        echo "$actor[0] is in his/hers fourties." . "<br />";
    } elseif ($age >= 50 && $age < 60) {
        echo "$actor[0] is in his/hers fifthties." . "<br />";
    } elseif ($age >= 60 && $age < 70) {
        echo "$actor[0] is in his/hers sixties." . "<br />";
    } elseif ($age >= 70 && $age < 80) {
        echo "$actor[0] is in his/hers seventies." . "<br />";
    } else {
        echo "$actor[0] is old";
    }
}



 // switch ($age) {
    //     case ($age >= 20 && $age > 30):
    //         echo "";
    //     case 1:
    //         echo "i equals 1";
    //         break;
    //     case 2:
    //         echo "i equals 2";
    //         break;
    // }