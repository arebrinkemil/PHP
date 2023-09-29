<?php

$quotes = [
    'Do you ever have déjà vu, Mrs. Lancaster?',
    'Phil? Hey, Phil? Phil! Phil Connors? Phil Connors, I thought that was you!',
    'Well, what if there is no tomorrow? There wasn\'t one today.',
];

?>


<ol>
    <?php
    $x = count($quotes);

    for ($i = 0; $i < $x; $i++) : ?>
        <li><?php echo $quotes[$i] ?></li>
    <?php endfor ?>
</ol>