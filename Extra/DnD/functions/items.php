<?php

global $rooms;


function scan()
{
    global $rooms;
    $currentRoom = $_SESSION['gameState']['playerLocation'];
    if (isset($rooms[$currentRoom]['items'])) {
        foreach ($rooms[$currentRoom]['items'] as $item) {
            echo $item . "<br>";
        }
    }
}


function pickup()
{
    global $rooms;
    $currentRoom = $_SESSION['gameState']['playerLocation'];
    if (isset($rooms[$currentRoom]['items'])) {
        echo "what do you want to pickup?";
        foreach ($rooms[$currentRoom]['items'] as $item) {
            echo $item . "<br>";
        }
        $_SESSION['gameState']['pickupMode'] = true;
    } else {
        echo "no items to be pickedup";
    }
}


function lootItem($chosenItem)
{
    global $rooms;

    $currentRoom = $_SESSION['gameState']['playerLocation'];

    if (isset($rooms[$currentRoom]['items']) && in_array($chosenItem, $rooms[$currentRoom]['items'])) {

        if (count($_SESSION['gameState']['inventory']) < MAX_INVENTORY_SIZE) {
            $_SESSION['gameState']['inventory'][] = $chosenItem;
            echo "You picked up $chosenItem!";

            // Remove the item from the room
            $key = array_search($chosenItem, $rooms[$currentRoom]['items']);
            unset($rooms[$currentRoom]['items'][$key]);
        } else {
            echo "Your inventory is full!";
        }
    } else {
        echo "That item isn't here to pick up!";
    }
}
