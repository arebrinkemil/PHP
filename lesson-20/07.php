<?php

if (file_exists('quotes.txt')) {
    $quotes = file('quotes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $rand = random_int(0, count($quotes) - 1);
    echo $quotes[$rand];
} else {
    echo "The file does not exist";
};
