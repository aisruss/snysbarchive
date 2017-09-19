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
            <h1 class="title">Request</h1>
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
                            $Title=$row[1];
                            $Author=$row[2];
                            $ArrangedBy=$row[3];
                            $PhysicalLocation=$row[7];
                            //echo "Score ID:".$row[0]."<br>";
			                echo "<strong>Title: </strong>".$row[1]."<br>";
			                echo "<strong>Author: </strong>".$row[2]."<br>";
			                echo "<strong>Arranged By: </strong>".$row[3]."<br>";
                            echo "<strong>Physical Location: </strong>".$row[7]."<br>";

		                } 
                    }

                    $sql= "INSERT INTO `uks29505archive`.`request` (`Title` ,`Author` ,`ArrangedBy` ,`PhysicalLocation` ,`UserID`)
VALUES ('$Title', '$Author', '$ArrangedBy', '$PhysicalLocation', '$UserID')";

$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
	
echo "<h3><center>Successful!</h3><center>";

	}
	
else {
echo "Error, Please Try Again!";
}
?>
                    <center><a href="Browse.php">Return To Browse Music</a> | <a href="ViewRequest.php">Return To View Requests</a> | <a href="Search.php">Return to Search</a></center>
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