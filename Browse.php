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
<h1 class="title">Browse Music!</h1>
				<div class="entry">
					<p class="Body">
                    Select the table to browse from using the dropdown list below:
                    <br>(The dropdown box lists the tables stored, which are divided in alphabetical order - so if it says j_music, it means all music beginning with j)
<?php
$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
if (mysql_select_db($dbname, $conn))
{
?>
    <form method="post" action="Browse.php">
	<select name="tables">
	<?php
	while ($row = mysql_fetch_row($result)) 
    {
    if ($row[0] != 'user_details' && $row[0] != 'request') {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
}
	?>
	</select>
	<input type="submit" value="Show">
</form>
<br>
<?php
if (isset($_POST) && isset($_POST['tables']))
{
	$tbl=$_POST['tables'];
    if ($tbl != 'user_details')
    {
	$query="SELECT * from $tbl ORDER BY title ASC";
	$res=mysql_query($query);
	if ($res)
	{
        echo "<h2>".$tbl."</h2>";
	?>
	<table border="1">
        <th>ID</th>
        <th>Title</th>
        <th>Author</th> 
        <th>Arranged By</th>
        <th>View Record</th>
	<?php
		while (	$row = mysql_fetch_array($res))
		{
			echo "<tr>";
            echo "<td>".$row['ScoreID']."</td>";
            $ScoreID = $row['ScoreID'];
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
            echo "<td><a href=\"ViewRecord.php?Table=$tbl"."&"."ScoreID=$ScoreID\">View Record</a></td>";
			echo "</tr>";
            
            
		} 
        ?>
	</table>
	<?php
	}
    } }
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