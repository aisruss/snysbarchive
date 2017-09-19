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
<h1 class="title">Edit Details!</h1>
				<div class="entry">
					<p class="Body">
                    Please review your information and change any details in the form below:
                    <?php
    //$dbname = 'uks29505archive';
    $EmailAdd=$_SESSION['email'];
    $sql = "SELECT UserID FROM user_details WHERE Email='$EmailAdd'";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
    $UserID =  $row[0] ;


if (mysql_select_db($dbname, $conn))
{
    
//mysql_free_result($result);

	$query="SELECT * FROM user_details WHERE UserID='$UserID'";	
    $res=mysql_query($query);
    $row = mysql_fetch_array($result);

	if ($res)
	{
	?>
	<table border="1">
        <th>Firstname</th>
        <th>Surname</th>
        <th>Address</th>
	<?php
		while (	$row = mysql_fetch_array($res))
		{
     
            //echo "<form action="" method="post">";

            //echo "<th>Title</th>";
			echo "<tr>";
			echo "<td>".$row['Firstname']."</td>";
            echo "<td>".$row['Surname']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "</tr>";
            //Set User info into variables
             $Firstname =  $row['Firstname'];
    $Surname =  $row['Surname'];
    $Email =  $row['Email'];
    $Password =  $row['Password'];
		} ?>
	</table>
        </br></br>
                    <h3>Please edit the information below you would like to change:</h3></h2>           
     <table border="1">
         <tr>
    <form action="UpdateUser.php" method="post">
        <tr><td>Firstname</td><td><input type="text" name="Firstname" id="Firstname" value="<?php echo $Firstname; ?>"/></td></tr>
        <tr><td>Surname</td><td><input type="text" name="Surname" id="Surname" value="<?php echo $Surname; ?>"/></td></tr>
        <tr><td>Email</td><td><input type="text" name="Email" id="Email" value="<?php echo $Email; ?>"/></td></tr>
         <tr><td>Password</td><td><input type="password" name="Password" id="Password" value="<?php echo $Password; ?>"/></td></tr>
        <tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>
    </form>
    </tr> 
         </table>
	<?php
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