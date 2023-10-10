<?php

$hasParent = false;
$age = 17;

if ($hasParent && $age < 18) {
    echo "You can go ahead and watch The Square with your parents.";
} elseif (!$hasParent && $age < 18) {
    echo "Sorry. You're not allowed to watch The Square without your parents.";
} else {
    echo "Welcome to the movie theatres, you're a grown-up!";
}
