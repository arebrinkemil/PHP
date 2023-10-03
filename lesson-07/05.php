<?php

$characters = [
    'Allison Reynolds',
    'Andrew "Andy" Clark',
    'Brian Ralph Johnson',
    'Claire Standish',
    'John Bender',
];


/*foreach ($characters as $key => $character) {
    echo $character . "<br />";
}*/


$i = 0;

while ($i < count($characters)) {
    echo $characters[$i] . "<br />";
    $i++;
}
