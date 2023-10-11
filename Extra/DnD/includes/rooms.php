<?php




$rooms = array(
    "lobby" => array(
        "description" => "The entrance of 'The Nexus'. Flickering neon lights and a cold, sterile atmosphere greet you. A rusty knife lies on a bench nearby.",
        "connections" => array("north" => "security_checkpoint"),
        "items" => array("rusty_knife"),
    ),
    "security_checkpoint" => array(
        "description" => "A dimly lit checkpoint. A guard stands watch, eyeing you suspiciously.",
        "connections" => array("north" => "tech_lab", "south" => "lobby"),
        "enemies" => array("guard"),
        "items" => array("baton"),
    ),
    "tech_lab" => array(
        "description" => "A room filled with malfunctioning robots. Sparks fly from a console, on which lies an Electro-Glove.",
        "connections" => array("north" => "residential_quarters", "south" => "security_checkpoint"),
        "items" => array("electro_glove"),
    ),
    "residential_quarters" => array(
        "description" => "A corridor lined with doors. Muffled voices echo. A locked door stands at the end with a sign 'Armory'.",
        "connections" => array("north" => "armory", "east" => "gang_hideout", "west" => "vr_arcade", "south" => "tech_lab"),
        "locked" => array("north"),
    ),
    "armory" => array(
        "description" => "Walls mounted with futuristic weapons. An enticing cyber-enhanced weapon sits on a pedestal.",
        "connections" => array("south" => "residential_quarters"),
        "items" => array("laser_sword"),
    ),
    "gang_hideout" => array(
        "description" => "Graffiti-covered walls and shady figures. The gang leader lounges on a makeshift throne.",
        "connections" => array("west" => "residential_quarters", "east" => "black_market"),
        "enemies" => array("gang_leader"),
        "items" => array("access_card"),
    ),
    "vr_arcade" => array(
        "description" => "Rows of VR booths with players engrossed in games. There's a cabinet labeled 'Staff Only'.",
        "connections" => array("east" => "residential_quarters"),
        "items" => array("health_pack"),
    ),
    "black_market" => array(
        "description" => "A bustling underground market. Vendors peddle rare items. A Plasma Cannon is displayed at a booth.",
        "connections" => array("west" => "gang_hideout", "north" => "executive_suites"),
        "items" => array("plasma_cannon"),
    ),
    "executive_suites" => array(
        "description" => "Lavish rooms where the elite reside. Guards patrol diligently. One seems to have a special key.",
        "connections" => array("south" => "black_market", "north" => "boss_lair"),
        "enemies" => array("elite_guard"),
        "items" => array("boss_room_key"),
    ),
    "boss_lair" => array(
        "description" => "The heart of 'The Nexus'. A vast chamber with the boss seated, awaiting you.",
        "connections" => array("south" => "executive_suites"),
        "enemies" => array("boss"),
    )
);



// $rooms = [
//     'roomA' => [
//         'description' => 'You are in room A. There is a door to the north.',
//         'exits' => [
//             'north' => 'roomB'
//         ],
//         'exitConditions' => [
//             'north' => [
//                 'type' => 'hasItem',
//                 'item' => 'key'
//             ]
//         ],
//         'items' => ['sword', 'shield'],
//     ],
//     'roomB' => [
//         // ... another room's details
//     ],
//     // ... other rooms
// ];