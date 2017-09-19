<?php
include 'UserFunction.php';
$table = $_GET['Table'];
$scoreid = $_GET['ScoreID'];


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
			<li><a href="Browse.php">Browse</a></li>
            <li><a href="Search.php">Search</a></li>
             <li><a href="ViewRequest.php">Requests</a></li>
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
<h1 class="title">View Record</h1>
				<div class="entry">
					<p class="Body">
                    <strong>Working Progress: Not all record specific data has been added yet so apologies if some information is not displaying!</strong><br><br>
				 <?php
                    $query="SELECT * from $table WHERE ScoreID=$scoreid";
                    $res=mysql_query($query);
	if ($res)
	{
		while (	$row = mysql_fetch_array($res))
		{
            $Pdf=$row[9];
            $Mp3=$row[10];
            $scoreid = $row['ScoreID'];
			echo "<strong>Title: </strong>".$row[1]."<br>";
			echo "<strong>Author: </strong>".$row[2]."<br>";
			echo "<strong>Arranged By: </strong>".$row[3]."<br>";
			echo "<strong>Publisher: </strong>".$row[4]."<br>";
            echo "<strong>Date: </strong>".$row[5]."<br>";
            echo "<strong>Duration: </strong>".$row[6]."<br>";
            echo "<strong>Physical Location: </strong>".$row[7]."<br>";
            echo "<strong>Last In Folders: </strong>".$row[8]."<br>";
            if ($Pdf !=null)
            {echo "<strong>View a sample of the sheet music: </strong><a href=".$row[9]."  target='_blank'>View Sample</a><br>";}
            else{echo "<strong>View a sample of the sheet music: </strong>No sample Avaliable<br>";}
            if ($Mp3 !=null)
            {echo "<strong>Listen to the piece of music: </strong><a href=".$row[10]."  target='_blank'>Listen</a><br>";}
            else 
            {echo "<strong>Listen to the piece of music: </strong>No sample Avaliable<br>";}
		} 
}
?>
                <center><?php echo "<td><a href=\"Request.php?Table=$table"."&"."ScoreID=$scoreid\">Request This!</a></td>"; ?> | <a href="Browse.php">Return To Browse Music</a> | <a href="Search.php">Return to Search</a></center>
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
			        <a href="ContactLoggedIn.php">Contact Us!</a>
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