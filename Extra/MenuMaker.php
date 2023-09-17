<?php
$menuItems = [
    [
        'menuText' => 'Home',
        'link' => '/home'
    ],
    [
        'menuText' => 'Products',
        'link' => '/products'
    ],
    [
        'menuText' => 'Services',
        'link' => '/services'
    ],
    [
        'menuText' => 'About Us',
        'link' => '/about-us'
    ],
    [
        'menuText' => 'Contact',
        'link' => '/contact'
    ],
    // Add more menu items here if needed
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Menu</title>
    <style>
        /* Add some basic CSS for styling the menu */
        ul.horizontal-menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li.menu-item {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <ul class="horizontal-menu">
        <?php foreach ($menuItems as $menuItem) { ?>
            <li class="menu-item">
                <a href="<?php echo $menuItem['link']; ?>"><?php echo $menuItem['menuText']; ?></a>
            </li>
        <?php } ?>
    </ul>
</body>

</html>