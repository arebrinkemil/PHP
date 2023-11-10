<?php
// ?? is the shorthand for an if statement with an isset check. If the ID value
// doesn't exist we give it a default value `1`.
$id = $_GET['id'] ?? 1;

$db = new PDO('sqlite:tmdb.db');
$stmt = $db->prepare("SELECT * FROM directors where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

$director = $stmt->fetchAll();

if (empty($director)) {
    echo "Not Found
    The director wasn't found in the database.";
    exit;
}

// TODO: Implement the database logic here.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <?php foreach ($director as $dir) : ?>
        <h1><?php echo $dir['first_name'] . " " . $dir['last_name'] ?></h1>
        <p><?php echo $dir['biography'] ?></p>
    <?php endforeach ?>


</body>

</html>