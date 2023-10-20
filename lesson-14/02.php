<?php

$url = "htsocial.network";

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "The URL is valid!";
} else {
    echo "The URL is not valid!
    ";
}
