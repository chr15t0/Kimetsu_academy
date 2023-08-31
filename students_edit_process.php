<?php

if(isset($_POST['save']))
{
    include('config.php');
    $nim        = $_POST['nim'];
    $name       = $_POST['name'];
    $gender     = $_POST['gender'];
    $class     = $_POST['class'];
    $update     = mysqli_query($connection,"UPDATE students SET
    
    name        ='$name',
    gender  ='$gender',
    class       ='$class'
    
    where nim   = '$nim' ")

    or die(mysqli_error($connection));

    if($update)
    {
        echo "<script>window.location = 'students.php'</script>";
    }

    else
    {
        echo "<h2>Gagal menyimpan data</h2>";
        echo "<a href ='students_edit.php ?nim= ".$nim."'>Back</a>";
    }
}

else
{
    echo "<script>window.history.back()</script>";
}

?>