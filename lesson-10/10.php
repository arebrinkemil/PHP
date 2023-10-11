<?php

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

function searchEmojis($query)
{
    global $emojis;
    foreach ($emojis as $key => $emoji) {
        $similar = similar_text($key, $query, $perc);
        if ($similar >= 3 && $perc >= 50) {
            $similarWord[] = $emoji;
        }
    }
    return $similarWord;
}

var_dump(searchEmojis('sungl'));
