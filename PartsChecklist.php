<?php
include 'AdminFunction.php';
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
			<li><a href="Account.php">Account</a></li>
            <li><a href="AdminViewRequest.php">Requests</a></li>
                <li><a href="PartsChecklist.php">Parts Checklist</a></li>
            <li><a href="Logout.php">Logout</a></li>
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
<h1 class="title">Parts Checklist</h1>
				<div class="entry">
					<p class="Body">
                    Click on the link below to open the spreadsheet with the parts checklist for the Archive.
				<br><a href="PartsChecklist.xlsx">Parts Checklist</a>
	          
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
					<h2>Logged In!</h2>
					<p><br>Hello <?php echo $firstname.' '.$surname;?>
                       </p>
				</li>
				<li>
					<h2>SNYSB</h2>
					<p>
			<a href="Contact.php">Contact Us!</a>
					</p>
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