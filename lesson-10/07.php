<?php

declare(strict_types=1);

// TODO: Implement the getDescription function.

function getDescription(string $movie, int $year, float $rating): string
{
    return "The movie $movie was released $year and is rated $rating on IMDb.";
}

$description = getDescription('Ace Ventura: Pet Detective', 1994, 6.9);
echo $description; // The movie Ace Ventura: Pet Detective was released 1994 and is rated 6.9 on IMDb.