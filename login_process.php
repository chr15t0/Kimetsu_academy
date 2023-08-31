<?php
session_start();
include "config.php";
//menangkap data yang dikirim dari form login
$username=$_POST["username"];
$password=$_POST["password"];
$query=mysqli_query($connection,"select * from user where username='$username' and password='$password'");
$cek=mysqli_num_rows($query); //melakukan pencocokan
if($cek==TRUE){
        $_SESSION['username']=$username;
        header("location:home.php"); }
else{
echo "<script> alert('Username atau Password Salah'); window.location = 'login.php'; </script>";
}
?>