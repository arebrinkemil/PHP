<?php
// TODO: Implement the logic here.

if (isset($_POST['url'])) {
    $url = $_POST['url'];
    //trim url and checck if it is empty
    $url = trim($url);
    if (empty($url)) {
        echo 'Please enter a valid URL';
    } else {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo 'The URL is valid';
        } else {
            echo 'The URL is not valid';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
</head>

<body>
    <form action="06.php" method="post">
        <label for="url">URL</label>
        <input type="text" name="url" id="url" placeholder="gameofthron.es">

        <button type="submit">Test</button>
    </form>
</body>

</html>