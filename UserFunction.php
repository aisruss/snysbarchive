<?php
session_start();
$_SESSION['email']; 
if(!session_is_registered("email"))
{
header("location:Index.html");
} 
include ('Connect.php'); //Connects to database
$EmailAdd=$_SESSION['email'];
    $sql = "SELECT * FROM user_details WHERE Email='$EmailAdd'";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
    $UserID =  $row[0] ;
    $firstname = $row[1];
    $surname = $row[2];
    $email = $row[3];
 header("Cache-Control: max-age=600");
?>