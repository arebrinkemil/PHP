 <?php

    global $rooms;


    function scan()
    {
        global $rooms;
        $currentRoom = $_SESSION['gameState']['playerLocation'];
        if (isset($rooms[$currentRoom]['items'])) {
            foreach ($rooms[$currentRoom]['items'] as $item) {
                return $item . "<br>";
            }
        }
    }


    function pickup()
    {
        global $rooms;
        $currentRoom = $_SESSION['gameState']['playerLocation'];
        $message = "";

        if (isset($rooms[$currentRoom]['items'])) {
            $message .= "What do you want to pickup?<br>";

            foreach ($rooms[$currentRoom]['items'] as $item) {
                $message .= $item . "<br>";
            }

            $_SESSION['gameState']['pickupMode'] = true;
        } else {
            $message = "No items to be picked up.";
        }

        return $message;
    }


    function lootItem($chosenItem)
    {
        global $rooms;

        $currentRoom = $_SESSION['gameState']['playerLocation'];

        if (isset($rooms[$currentRoom]['items']) && in_array($chosenItem, $rooms[$currentRoom]['items'])) {

            if (count($_SESSION['gameState']['inventory']) < MAX_INVENTORY_SIZE) {
                $_SESSION['gameState']['inventory'][] = $chosenItem;
                return "You picked up $chosenItem!";

                // Remove the item from the room
                $key = array_search($chosenItem, $rooms[$currentRoom]['items']);
                unset($rooms[$currentRoom]['items'][$key]);
            } else {
                return "Your inventory is full!";
            }
        } else {
            return "That item isn't here to pick up!";
        }
    }
