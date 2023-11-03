<?php


$title = "SiliconValley";
setcookie(
    $title,
    time() + 3600
);

if (isset($_COOKIE[$title])) {
    echo $_COOKIE[$title];
} else {
    echo "The cookie $title doesn't exist";
}
