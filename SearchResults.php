<?php
include 'UserFunction.php';
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
<h1 class="title">Search Results:</h1>
				<div class="entry">
					<p class="Body">
  <?php
   if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if($_POST['name']){
   $name = stripslashes($_POST['name']);
  $tbl = $_POST['tables'];
  //-query  the database table
  $sql="SELECT Title, ScoreID FROM $tbl WHERE Title LIKE '%" . $name . "%' OR Author LIKE '%" . $name . "%' OR ArrangedBy LIKE '%" . $name . "%'";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $ScoreID  =$row['ScoreID'];
          $Title=$row['Title'];
  //-display the result of the array
  echo "<ul>\n";
 //echo "<li>" . "<a  href=\"Search.php?id=$ScoreID\">"   .$Title ."</a></li>\n";
  echo "<li>" . "<a href=\"ViewRecord.php?Table=$tbl"."&"."ScoreID=$ScoreID\">"   .$Title ."</a></li>\n";
  echo "</ul>";
  }
  echo "<a href=\"Search.php\">Back to Search</a>";
  $numrows=mysql_num_rows($result);
  if($numrows == 0){
  echo "<p>No results found.</p>"; 
  }

  }
  else
  {
  echo  "<p>Please enter a search query - box cannot be blank!</p>"; ?>
  <p><a href="Search.php">Back to Search</a></p>
  <?php }

  }
  }
?>
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