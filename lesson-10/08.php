<?php

function isPalindrome($value)
{
    $reverse = strrev((string) $value);
    if ($reverse == $value) {
        return true;
    } else {
        return false;
    }
}

var_dump(isPalindrome("emil"));
