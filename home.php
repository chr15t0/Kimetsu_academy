<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:login.php");
exit();
}
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <title>Home Page Kimetsu Academy</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="home.php">
                <img src="images/Demon-Slayer-Emblem.png" width="115,2" height="64,8" alt="">
                Kimetsu Academy
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="students.php">Students</a>
                </li> 
                <li class="nav-item active">
                    <a class="nav-link" href="vision&mission.php">Vission & Mission</a>
                </li> 
                </ul>
            </div>
            <a class="btn" href="logout.php" role="button">Logout</a>
        </nav>
        <div class="bg-pic">
            <img src="images/Butterfly_Mansion_Anime.webp" width="100%" alt="">
        </div>
        <div class="welcome">
            <h1>Welcome to Kimetsu Academy, <br> <?php echo  $_SESSION['username']; echo" "?></h1>
        </div>
  </body>
</html>