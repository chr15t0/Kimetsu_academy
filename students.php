<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="students.css">

    <title>Student Page</title>
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
        <div class="jumbotron" id="jadwal">
            <div class="container">
                <div class="col-lg-12 text-center my-5">
                    <h3 class="display-4">Students</h3>
                    <a class="btn" href="student_add.php" role="button">Add Students</a>
                </div>

                <table class="table table-striped" style="text-align: center; color:white">
                    <thead class="table-dark">
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gender / Sex</th>
                        <th>Class</th>
                        <th>Option</th>
                    </thead>

                    <!-- Menampilkan data mahasiswa -->
                    <?php
                    include_once 'config.php';
                    $no = 1;
                    $data = mysqli_query($connection, "SELECT * FROM students");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['name']; ?></td>
                        <td><?php echo $d['gender']; ?></td>
                        <td><?php echo $d['class']; ?></td>
                        <td>
                            <a class="btn" href="students_edit.php?nim=<?php echo $d['nim']; ?>" role="button">Edit</a>
                            <a class="btn" href="delete.php?nim=<?php echo $d['nim']; ?>" role="button">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    <!-- Menampilkan data mahasiswa -->
                </table>
            </div>
        </div>
  </body>
</html>