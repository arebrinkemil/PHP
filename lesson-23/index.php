<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <p>This is the home page.</p>
    <h2><?php
        if (isset($_SESSION['user'])) {
            echo "Welcome " . $_SESSION['user']['name'];
        } ?></h2>

    <h2><?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        } ?></h2>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>