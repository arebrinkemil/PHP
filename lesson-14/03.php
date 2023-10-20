<?php


declare(strict_types=1);

$emails = [
    'j@e',
    'jesse@f.com',
    'jesse.eisenberg',
    'eisenberg@facebook',
    'jesse.eisenberg@facebook.com',
];


foreach ($emails as $email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "the email " . $email . " is valid" ;
    }
}
