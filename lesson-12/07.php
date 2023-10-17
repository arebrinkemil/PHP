<?php

declare(strict_types=1);

$timestamps = [
    1373500800,
    1402012800,
    1433980800,
    1466121600,
    1496966400,
    1532649600,
];


foreach ($timestamps as $dates) {
    $newformat = date('d M Y', $dates);
    echo $newformat . "<br>";
}
