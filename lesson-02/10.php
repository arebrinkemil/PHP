<?php

$name = 'Dominic West';
$yearOfBirth = 1969;
$currentYear = date('Y');

$age = $currentYear - $yearOfBirth;

if ($age > 18) {
  echo "Dominic West is old enough to drive.";
} else {
    echo "Dominic West is not old enough to drive.";
}