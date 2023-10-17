<?php

declare(strict_types=1);

function diffInYears(int $timestamp): int
{
    $currentYear = 18;
    $year = date("y", $timestamp);
    return $currentYear - $year;
}
