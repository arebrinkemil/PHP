<?php

require __DIR__ . '/functions.php';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $name = transformName($name);
    filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo $name;
}
