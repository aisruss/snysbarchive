<?php
include 'UserFunction.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" >
<meta name="description" content="" >
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta http-equiv="refresh" content="4; url="Index.html" /> <!--Redirects after 4 seconds-->
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
<h1 class="title">SNYSB ARCHIVE!</h1>
				<div class="entry">
					<p class="Body">
                    <h2 class="title">Logout</h2>
				<div class="entry">
				<br/>
				<?php
					;
					 session_destroy(); // Unset session, terminate the session and move the user back to *1*.
					 echo "You have been logged out, please wait."; //Logout Message
				?>
				</div>
	          
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