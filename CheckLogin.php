<?php 
                    include 'Connect.php';
                    $myusername=$_POST['email']; 
                    $mypassword=$_POST['password']; 
                    //DO THE SAME FROM SCRAPPY3 STRIPSLASHES
                    // To protect MySQL injection (more detail about MySQL injection)
                    $myusername = stripslashes($myusername);
                    $mypassword = stripslashes($mypassword);
                    $myusername = mysql_real_escape_string($myusername);
                    $mypassword = mysql_real_escape_string($mypassword);

                    $tbl_name="user_details";
                    $sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
                    $result=mysql_query($sql);

                    // Mysql_num_row is counting table row
                    $count=mysql_num_rows($result);
                    if($count==1)
                    {
                        // Register $myusername, $mypassword and redirect to file "login_success.php"
                        session_register("myusername");
                        session_register("mypassword");
                        $_SESSION['email']=$myusername; 
                        header('location:Account.php');
                    }
                    else 
                    {
                        
                    }
                    ?>	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" >
<meta name="description" content="" >
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<title>SNYSB Archive</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" >
<!-- Location of javascript. -->
<script language="javascript" type="text/javascript" src="swfobject.js" ></script>
</head>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />


<div id="wrapper">
	<div id="header">
	<!-- KEEP THIS BIT [ITS FORMATTING] -->	
	</div>
	<!-- end #header -->
	<div id="menu">
			<ul>
			<li><a href="Index.html">Home</a></li>
			<li><a href="Register.php">Register</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
    <div id="content">
			<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
				<h2 class="title">Incorrect Login</h2>
				<div class="entry">
				<br/>
					    Wrong Username or Password
                        <br/><br/>
                        <a href="Index.html">Click Here to Return</a>
				</div>
 </div>
			</div>
			</div>
			
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Welcome!</h2>
					<p>Welcome to SNYSBs archive!
                       </p>
				</li>
				<li>
					<h2>SNYSB</h2>
					<p>
			        <a href="ContactNotLogged.php">Contact Us!</a>
<br><a href="http://www.snysb.org.uk">Visit SNYSB'S Website</a></p>
				</li>
				

				
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>