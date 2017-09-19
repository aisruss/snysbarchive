<?php 
include 'Connect.php';
                    // username and password sent from form 
                    $myusername=$_POST['email']; 
                    $mypassword=$_POST['password']; 
                    //DO THE SAME FROM SCRAPPY3 STRIPSLASHES
                    // To protect MySQL injection (more detail about MySQL injection)
                    $myusername = stripslashes($myusername);
                    $mypassword = stripslashes($mypassword);
                    $myusername = mysql_real_escape_string($myusername);
                    $mypassword = mysql_real_escape_string($mypassword);

                    $tbl_name="admin";
                    $sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
                    $result=mysql_query($sql);

                    // Mysql_num_row is counting table row
                    $count=mysql_num_rows($result);
                   // $row = mysql_fetch_row($result);//new
                    // If result matched $myusername and $mypassword, table row must be 1 row
                     // Register $myusername, $mypassword and redirect to file "login_success.php"
                     //session_register("myusername");
                     //session_register("mypassword"); 
                     
                   
                 if($count==1){
                // Register $myusername, $mypassword and redirect to file "login_success.php"
                session_register("myusername");
                session_register("mypassword");
                $_SESSION['email']=$myusername; 
                header("location:Admin.php");
                }
                else {
                echo "Wrong Username or Password";
                }
                ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login Failed</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>&nbsp;</h1>
		</div>
	</div>
	<!-- end #header -->
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title">Incorrect Login</h2>
				<div class="entry">
                    Error - <a href="AdminLogin.php">Click here to try again</a>
				<br/>
					
				</div>
			</div>

		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
		<!--Profile and Menu-->
			<ul>
				<li>
					<h2>Profile</h2>
					<p>
					User Info : Guest
					</p>
				</li>

			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p>Copyright (c) 2010 Sitename.com. All rights reserved.</p>
	</div>
	<!-- end #footer -->
</body>
</html>