<?php

declare(strict_types=1);

$cells = ['C201', 'B302', 'D404', 'A500', 'B418'];

shuffle($cells);

$cell = $cells[0];

echo "Piper Chapman, you'll be in cell " . $cell . "!";
