<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile Page</title>
</head>

<body>


    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 shadow">
                    <h1 class="text-center">WELCOME, <?= $_SESSION['email']; ?></h1>
                    <input type="submit" class="btn btn-danger" value="Logout"
                        onclick="window.location.href='index.php'">
                </div>
            </div>
        </div>
    </div>
</body>

</html>