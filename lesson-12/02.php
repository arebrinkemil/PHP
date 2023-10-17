<?php

declare(strict_types=1);

$quote = '?kaeps uoy nehw ,ekiL ?semitemos flesruoy raeh uoy oD';


$characters = str_split($quote, 1);

$reversed = array_reverse($characters);
$imploded = implode("", $reversed);

echo $imploded;
