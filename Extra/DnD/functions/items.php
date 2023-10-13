<?php

global $rooms;


function lootItem()
{
    global $rooms;

    $currentRoom = $_SESSION['gameState']['playerLocation'];
    $items = $rooms[$currentRoom]['items'];

    array_push($_SESSION['gameState']['inventory'], $items[0]);
}
