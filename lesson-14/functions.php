<?php


function sanitizeName($name)
{
    $CleanName = trim(strtolower(filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
    return $CleanName;
}
