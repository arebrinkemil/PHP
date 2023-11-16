<?php

$file = file_get_contents(__DIR__ . '/show.json');

$show = json_decode($file, true);

echo $show['description'];
