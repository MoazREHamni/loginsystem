<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: p-login.php");
    exit;
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome! <?php echo $_SESSION['username']; ?></title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .welcome-text {
            text-align: center;
            color: #007bff;
            font-size: 36px;
            margin-bottom: 30px;
            animation: colorChange 5s infinite alternate;
            transition: background-color 0.1s ease-in-out;
            animation: moveLeftToRight 5s infinite alternate;
        }

        .btn-get-started {
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            color: #fff;
            font-size: 18px;

        }

        .btn-get-started:hover {
            background-color: #0056b3;
        }

        @keyframes colorChange {
            0% {
                color: #007bff;
            }

            100% {
                color: #ff0000;
            }
        }

        @keyframes moveLeftToRight {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(60px);
            }
        }
    </style>
</head>

<body>
    <?php require '_nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="welcome-text">Welcome <?php echo $_SESSION['username']; ?> to Our Page</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                <div class="text-center">
                    <p> Whenever you need to, be sure to logout</p>
                </div>

                <div class="text-center">
                    <p> <a href="/moaz/p-logout.php" class="btn btn-get-started">Logout</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
