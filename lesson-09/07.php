<?php
$people = [
    'Christopher Læssø' => true,
    'Ruben Östlund' => false,
    'Elisabeth Moss' => true,
];

?>
<ol>
    <?php foreach ($people as $name => $actor) : ?>
        <li>
            <?php if ($actor) {
                echo "$name is an actor";
            } else {
                echo "$name is not an actor";
            } ?>


        </li>
    <?php endforeach ?>
</ol>