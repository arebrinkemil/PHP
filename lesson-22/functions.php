<?php

function transformName($name)
{
    $nameParts = explode(' ', $name);
    $firstName = $nameParts[0];
    $lastName = $nameParts[1];
    $firstName = strtoupper($firstName);
    $lastName = strtolower($lastName);
    $name = $firstName . ' ' . $lastName;
    return $name;
}
