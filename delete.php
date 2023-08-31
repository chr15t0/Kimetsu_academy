<?php
if(isset($_GET['nim']))
{
    include('config.php');
    $nim        = $_GET['nim'];
    $check        = mysqli_query($connection,"SELECT nim FROM students 
    WHERE nim = '$nim'") or die(mysqli_error($connection));

    if(mysqli_num_rows($check)==0)
    {
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $del = mysqli_query($connection,"DELETE FROM students WHERE nim = '$nim'");
        if($del)
        {
            echo "<h3>Data successfully deleted</h3>";
            echo "<script>window.location = 'students.php'</script>";
        }
        else
        {
            echo "<h3>Failed to delete data</h3>";
            echo "<a href = 'students.php'>kembali</a>";
        }
    }
}
else
{
    echo "<script>window.history.back()</script>";
}

?>
<body>
