<?php
if (isset($_FILES['upl'])) {
    if (count($_FILES['upl']) > 0) {
        foreach ($_FILES['upl']['name'] as $key => $file) {
            if ($_FILES['upl']['size'][$key] >= 3137152) {
                echo 'The uploaded file ' . $file . ' exceeded the file size limit.';
            } else {
                $destination = __DIR__ . '/uploads/' . date('ymd') . '-' . $file;
                move_uploaded_file($_FILES['upl']['tmp_name'][$key], $destination);
            }
        }
    }
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
    <form action="" method="post" enctype="multipart/form-data">
        <div>

            <input type="file" name="upl[]" id="upl" accept="image/*" multiple="">

        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>