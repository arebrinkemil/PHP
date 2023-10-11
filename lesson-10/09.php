<?php

declare(strict_types=1);

$emojis = [
    'joy' => '😂',
    'rage' => '😡',
    'scream' => '😱',
    'shit' => '💩',
    'smirk' => '😏',
    'sunglasses' => '😎',
    'thumbsdown' => '👎',
    'thumbsup' => '👍',
    'unicorn' => '🦄',
];


function getRandomEmoji(): string
{

    global $emojis;
    // $randomEmoji = rand(0, count($emojis));
    // return $emojis[$randomEmoji];

    shuffle($emojis);
    return $emojis[0];
}


echo getRandomEmoji();
