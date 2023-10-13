<?php

global $rooms;


function lootItem()
{
    global $rooms;

    $currentRoom = $_SESSION['gameState']['playerLocation'];

    if (isset($rooms[$currentRoom]['items']) && !empty($rooms[$currentRoom]['items'])) {
        $itemToLoot = array_shift($rooms[$currentRoom]['items']);

        // Check inventory size before adding
        if (count($_SESSION['gameState']['inventory']) < MAX_INVENTORY_SIZE) {
            $_SESSION['gameState']['inventory'][] = $itemToLoot;
            echo "You picked up $itemToLoot!";
        } else {
            echo "Your inventory is full!";
            // Optionally, add the item back to the room if you can't carry it
            array_unshift($rooms[$currentRoom]['items'], $itemToLoot);
        }
    } else {
        echo "There are no items to pick up in this room!";
    }
}
