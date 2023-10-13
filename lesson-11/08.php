<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$map = getMap(width: 40, height: 8);

foreach ($map as $row) {
    echo "<row><br>";
    foreach ($row as $block) {
        echo "<img src='{$block}' />";
    }
    echo "</row>";
}
