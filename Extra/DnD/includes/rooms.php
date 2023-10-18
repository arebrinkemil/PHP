<?php




$rooms = array(
    "lobby" => array(
        "description" => "The entrance of 'The Nexus'. Flickering neon lights paint the cracked floors, and the hum of distant machinery resonates through the cold, sterile atmosphere.",
        "connections" => array("north" => "security_checkpoint"),
        "items" => array("rusty_knife"),
    ),
    "security_checkpoint" => array(
        "description" => "Monitors cast a pale glow on the dimly lit checkpoint. Wiring snakes across the ceiling, while drones whir overhead. The guard's cybernetic eye scans for intruders.",
        "connections" => array("north" => "tech_lab", "south" => "lobby"),
        "enemies" => array("guard"),
        "items" => array("baton"),
    ),
    "tech_lab" => array(
        "description" => "Servers stack high, their LEDs blinking erratically. Robotic arms hang idle beside malfunctioning assembly lines. A hologram flickers, showcasing the latest tech advancements.",
        "connections" => array("north" => "residential_quarters", "south" => "security_checkpoint"),
        "items" => array("electro_glove"),
    ),
    "residential_quarters" => array(
        "description" => "Holographic door numbers shimmer in this corridor, with the soft hum of AI-assisted appliances behind them. Distant synth music is interrupted by the muted chatter of residents discussing the latest netrunner gossip.",
        "connections" => array("north" => "armory", "east" => "gang_hideout", "west" => "vr_arcade", "south" => "tech_lab"),
        "locked" => array("north"),

    ),
    "armory" => array(
        "description" => "Reflective surfaces gleam, showing an array of high-tech weaponry. Automated systems calibrate weapons, while cyber-augmented mannequins display armored suits with neon highlights.",
        "connections" => array("south" => "residential_quarters"),
        "items" => array("laser_sword"),
    ),
    "gang_hideout" => array(
        "description" => "Dim red lights punctuate the haze, illuminating graffiti murals of cyberpunk legends. Cables and tech junk litter the floor, as gang members exchange encrypted data chips.",
        "connections" => array("west" => "residential_quarters", "east" => "black_market"),
        "enemies" => array("gang_leader"),
        "items" => array("access_card"),
    ),
    "vr_arcade" => array(
        "description" => "Neon signs flash advertisements for the latest VR experiences. Users, connected to high-tech rigs, navigate digital realms, their expressions alternating between delight and horror.",
        "connections" => array("east" => "residential_quarters"),
        "items" => array("health_pack"),
    ),
    "black_market" => array(
        "description" => "Stalls with holographic displays showcase rare cyberware. Shady deals transpire in the shadows, and the air carries the scent of exotic tech. A vendor haggles with a netrunner over a piece of forbidden software.",
        "connections" => array("west" => "gang_hideout", "north" => "executive_suites"),
        "items" => array("plasma_cannon"),
    ),
    "executive_suites" => array(
        "description" => "Opulence meets tech in these lavish rooms. Crystal chandeliers have been replaced by dynamic light shows. The elite, adorned with the finest cyberware, converse about the state of the digital realm.",
        "connections" => array("south" => "black_market", "north" => "boss_lair"),
        "enemies" => array("elite_guard"),
        "items" => array("boss_room_key"),
    ),
    "boss_lair" => array(
        "description" => "A vast chamber illuminated by massive screens, each displaying streams of data. In the center, surrounded by augmented bodyguards, the boss awaits on a digital throne, interfaces swirling around them.",
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