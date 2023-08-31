<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
    <link rel="stylesheet" href="add.css">
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
                <a class="btn" href="students.php" role="button" >&larr;</a>
                <div class="col-lg-12 text-center my-5">
                    <h3 class="display-4">Add Students</h3>
                </div>

                <form action="student_add_process.php" method="post">
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td> : </td>
                            <td><input type="number" name="nim" required></td>
                        </tr>

                        <tr>
                            <td>Name</td>
                            <td> : </td>
                            <td><input type="text" name="name" required></td>
                        </tr>

                        <tr>
                            <td>Gender / Sex</td>
                            <td> : </td>
                            <td>
                                <select name="gender" required>
                                    <option>Gender / Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Class</td>
                            <td> : </td>
                            <td>
                                <select name="class" required>
                                    <option>Class</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td><input type="submit" name="add" value="Add"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
</body>

</html>