<?php

$minutes = 111;

if ($minutes < 60) {
    echo "The Square is not even 1 hour long.";
} elseif ($minutes > 60 && $minutes < 120) {
    echo "The Square is between 1 and 2 hours long.";
} else {
    echo "The Square is over 2 hours long.";
}
