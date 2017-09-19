<?php
session_start();
$_SESSION['email']; 
if(!session_is_registered("email"))
{
header("location:AdminLogin.php");
} 
include 'Connect.php'; //Connects to database
$EmailAdd=$_SESSION['email'];
    $sql = "SELECT * FROM admin WHERE Email='$EmailAdd'";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
    $AdminID =  $row[0] ;
    $name = $row[1];
    $email = $row[3];
?>