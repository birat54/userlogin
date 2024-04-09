<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
<header>
            <a href="#" class="logo"><img src="img/jeep.png" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="home">Home</a></li>
                <li><a href="ride">Ride</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="about">About</a></li>
                <li><a href="reviews">Reviews</a></li>
            </ul>
            <div class="header-btn">
                <a href="#" class="sign-up">Sign Up</a>
                <a href="#" class="sign-in">Sign In</a>
            </div>
        </header>
    <div class="container">
        <h1>Vroom Vroom Vroom</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>