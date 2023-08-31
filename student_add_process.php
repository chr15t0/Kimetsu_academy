<?php 
  if(isset($_POST['add'])) {
    include_once 'config.php';
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];

    $input = mysqli_query($connection, "INSERT INTO students VALUES
    ('$nim', '$name', '$gender', '$class')");

    if ($input) {
      echo "<h3>Data successfully added</h3>";
      echo "<script>window.location = 'students.php'</script>";
    }
    else  {
      echo "Failed to add data";
      echo "<a href='add.php'>Back</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }