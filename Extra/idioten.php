<?php

function cards()
{
    $numbers = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
    $colors  = array('Heart', 'spade', 'Diamond', 'Clubs');

    $cards = array();
    foreach ($colors as $color) {
        foreach ($numbers as $number) {
            $cards[] = $number . $color;
        };
    };

    return $cards;
}
