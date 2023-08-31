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
    <link rel="stylesheet" href="vision&mission.css">

    <title>Vision & Mission Page</title>
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
            <h1>Vision</h1>
            <p>The New School prepares students to understand, contribute to, and succeed in a rapidly changing society, thus making the world a better and more just place. We will ensure that our students develop both the skills that a sound education provides and the competencies essential for success and leadership in the emerging creative economy. We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities.</p>
            <h1>Mission</h1>
            <p>Our vision aligns with shifts in the global economy, society, and environment, which animates our mission and our values:</p>
            <ul>
                <li>Creativity, innovation, and a desire to challenge the status quo will affect what and how we teach and the intellectual ambitions of the university itself.</li>
                <li>Social engagement should orient students' academic experiences to help them become critically engaged citizens, dedicated to solving problems and contributing to the public good.</li>
                <li>The New School must embrace these principles and innovate to address shifts in the global economy, society, and environment that require individuals to grapple with complex problems, pursue more fluid and flexible career pathways, and collaboratively create change.</li>
            </ul>
        </div>
  </body>
</html>