<?php

if (isset($_COOKIE["Title"])) {
    echo "The title of the film is: The Revenant
    " . $_COOKIE["Title"];
} else {
    echo "no";
}
