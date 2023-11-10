<?php
if (isset($_POST['actor'])) {
    $actor = trim($_POST['actor']);
    $db = new PDO('sqlite:startrek.db');

    $stmt = $db->prepare("INSERT INTO actors (name) VALUES (:actor)");
    $stmt->bindParam(':actor', $actor);

    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
    <style>
        input {
            display: block;
            margin-bottom: 10px;
            min-width: 200px;
        }
    </style>
</head>

<body>
    <form action="04.php" method="post">
        <div>
            <label for="actor">Actor</label>
            <input type="text" name="actor" id="actor" placeholder="Will Wheaton" required>
        </div>

        <button type="submit">Save</button>
    </form>
</body>

</html>