<?php

declare(strict_types=1);

$quote = 'llA smelborp era gnirob litnu er\'yeht ruoy .nwo';

$exploded = explode(" ", $quote);

foreach ($exploded as $value) {
    $reversed[] = strrev($value);
}

$done = implode(" ", $reversed);
echo $done;
