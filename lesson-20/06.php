<?php
if (isset($_POST['quote'])) {
    $quote = htmlspecialchars(trim($_POST['quote']));
    $quote = $quote . "\n";
    file_put_contents('quotes.txt', $quote, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method="post">
        <p>
            <label>quote</label><br>
            <input type="text" name="quote" id="quote">
        </p>
        <button type="submit">Save</button>
    </form>

    <textarea id="quotes" name="quotes">
</textarea>
</body>

</html>