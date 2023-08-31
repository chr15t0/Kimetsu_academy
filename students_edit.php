<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
    <style>
    html{
    height: 100%;
    }
    body {
        background: -webkit-linear-gradient(top, #f96a08, #ffff99);
    }
    .bg-pic{
        position: absolute;
        top: 0;
        left : 0;
        width : 100%;
        z-index:-1 ;
    }
    .navbar{
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter:blur(10px);
    }
    .btn{
        background: rgba(0, 0, 0, 0.3);
        color: white;
        margin-right: 20px;
    }
    .btn:hover{
        background: rgba(255, 0, 0, 0.3);
        color: white;
    }
    .jumbotron{
    position: relative;
    background:rgba(255, 255, 255, 0.0) ;
    border-radius: 20px;
    align-items: center;
    justify-content: center;
    display: flex;
    }
    .container{
        text-align: center;
        background: #0000004d;
        backdrop-filter:blur(5px);
        color: white;
        padding: 20px;
        margin: 15px;
        border-radius: 20px;
        width: 500px;
    }
    .container a:hover{
        background: rgba(111, 188, 255, 0.3);
    }
    .container>a{
        margin-right: 100%;
    }
    input{
        border-radius:5px;
        color: white;
        background: rgba(255, 255, 255, 0.3);
        border: none;
        outline: none;
        margin: 10px;
    }
    </style>
</head>

<body>

    <!-- Edit data mahasiswa -->
    <?php
  include('config.php');
  $nim = $_GET['nim'];
  $show = mysqli_query($connection, "SELECT * FROM students WHERE nim = '$nim'");
  if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
  } else {
    $d = mysqli_fetch_assoc($show);
  }
  ?>
    <!-- Edit data mahasiswa -->
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
                <a class="btn" href="students.php" role="button" >&larr;</a>
                <div class="col-lg-12 text-center my-5">
                    <h3 class="display-4">Edit Data</h3>
                </div>

                <form action="students_edit_process.php" method="post">
                <input type="hidden" name="nim" value="<?php echo $nim; ?>">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td> : </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $d['name']; ?>" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Gender / Sex</td>
                            <td> : </td>
                            <td>
                                <select name="gender" required>
                                <option>Gender / Sex</option>
                                <option value="Male" <?php if ($d['gender'] == 'Male') {
                                            echo 'selected';
                                        } ?>>Male</option>
                                <option value="Female" <?php if ($d['gender'] == 'Female') {
                                            echo 'selected';
                                            } ?>>Female</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Class</td>
                            <td> : </td>
                            <td>
                                <select name="class" required>
                                    <option>Class</option>
                                    <option value="A" <?php if ($d['class'] == 'A') {
                                            echo 'selected';
                                        } ?>>A</option>
                                    <option value="B" <?php if ($d['class'] == 'B') {
                                            echo 'selected';
                                        } ?>>B</option>
                                    <option value="C" <?php if ($d['class'] == 'C') {
                                            echo 'selected';
                                        } ?>>C</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td><input type="submit" name="save" value="Save"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
</body>

</html>