<?php

declare(strict_types=1);

$quote = 'Don\'t be fuckin\' with Harry Potter!';


$cencored = str_replace($quote, "fuckin", "f**kin");
echo $cencored;
