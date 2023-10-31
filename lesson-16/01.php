<?php
if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];

    if ($avatar['type'] !== 'image/png') {
        echo 'The image file type is not allowed.';
    } else {
        move_uploaded_file($avatar['tmp_name'], __DIR__ . '/avatar.png');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03</title>
</head>

<body>
    <form action="01.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" accept=".png" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>