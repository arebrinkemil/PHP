<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a> -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/index.php' || '/' ? 'active' : '' ?>" href="/index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/about.php' ? 'active' : '' ?>" href="/about.php">About</a>
            </li>

            <li class="nav-item">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/login.php' ? 'active' : '' ?>" href="/login.php">Login</a>
                <?php } else {  ?>
                    <a class="nav-link" href="/app/users/logout.php">Logout</a>
                <?php } ?>
            </li>
        </ul>
    </div>
</nav>