<?php
// TODO: Implement the JSON logic here.



if (isset($_POST['name']) && isset($_POST['tmdb_url'])) {
    $name = $_POST['name'];
    $tmdb_url = $_POST['tmdb_url'];
    $array = [
        'name' => $name,
        'tmdb_url' => $tmdb_url,
    ];

    json_encode($array);
    file_put_contents("actors.json", $array, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <form action="06.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Lena Dunham">
                        <small class="form-text">Please provide the actor's full name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="tmdb_url">TMDb URL</label>
                        <input class="form-control" type="url" name="tmdb_url" id="tmdb_url" placeholder="https://www.themoviedb.org/person/139135-lena-dunham">
                        <small class="form-text">Please provide the actor's TMDb URL.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>