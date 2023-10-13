<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$map = getMap(40, 7);

foreach ($map as $row) {
    echo "<row><br>";
    foreach ($row as $block) {
        echo "<img src='{$block}' />";
    }
    echo "</row>";
}
