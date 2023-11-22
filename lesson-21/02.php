<?php

$jsonData = file_get_contents('horses.json');




if (isset($_GET['id'])) {
    $horseID = $_GET['id'];
    $horses = json_decode($jsonData, true);
    foreach ($horses['horses'] as $horse) {
        if ($horse['id'] == $horseID) {
            echo json_encode($horse);
            break;
        }
    }
} else {
    echo $jsonData;
}
