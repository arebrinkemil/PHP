<?php

if (isset($_GET['name'], $_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
}

echo "Hello " . $name . " " . $age;
