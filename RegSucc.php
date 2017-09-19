 <?php
                    include 'Connect.php'; //Connects to database
                    //When form is submit:-
					if(isset($_POST['submit']))
					{         
						// On submit, retrieve table values for php.                 
						$Firstname = mysql_real_escape_string($_POST['firstname']);
						$Surname = mysql_real_escape_string($_POST['surname']);
						$Password = mysql_real_escape_string($_POST['password']); 
						$PasswordCheck = mysql_real_escape_string($_POST['passwordcheck']); 
						$Email = mysql_real_escape_string($_POST['email']); 
						$EmailCheck = mysql_real_escape_string($_POST['emailcheck']); 
												
						//CHECKS. 
						//Check username is available by retrieving any same values from the DB table.			
                        $CheckEmailAvailable = mysql_query("SELECT * FROM user_details WHERE Email = '".$Email."'");

                        echo $CheckEmailAvailable;
                        // $result = mysql_query("SELECT * FROM $tbl WHERE Email='$email' and LoginPassword='$password'");
						$Results = mysql_fetch_array($CheckEmailAvailable);
						
						//If Username field is blank.
						if($Email == null )
						{				
							echo "You must enter an email address.";
							$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
							echo "<br/><br/>";
		 					echo "<a href='$url'>Click Here To Return</a>";
							die();                  	
						}
		
						//If RESULTS is any value other than NULL, die.
						if($Results != null )
						{				
							echo "Email already taken. Please try another.";
							$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
							echo "<br/><br/>";
		 					echo "<a href='$url'>Click Here To Return</a>";
							die();                	
						}
						
						//If Password and PasswordCheck fields in reg do not match, die.
						if($Password != $PasswordCheck)	
						{
							echo "The passwords you have entered do not match. Please try again.";
							$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
							echo "<br/><br/>";
		 					echo "<a href='$url'>Click Here To Return</a>";
							die();
						}
						
						//If Password field is NULL (i.e. blank) die.
						if($Password == Null)
						{
							echo "Your password must not be blank.";
							$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
							echo "<br/><br/>";
		 					echo "<a href='$url'>Click Here To Return</a>";
							die();
						}
						
						//If Email and EmailCheck are not equal, die.
						if($Email != $EmailCheck)
						{							                                             
							echo "The email addresses you have entered do not match. Please try again.";
							$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
							echo "<br/><br/>";
		 					echo "<a href='$url'>Click Here To Return</a>";
							die();
		
						}

                        						
						//ELSE add data to DB.
						else
						
						    //TABLE ADD.
						    mysql_query("INSERT INTO user_details (Firstname, Surname, Email, Password) VALUES ('$Firstname', '$Surname', '$Email', '$Password')");
						   // or  die(mysql_error("Error registering, the database may be down, please try again later."));
						    //header( "location: RegSucc.php" ) ;
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
			<li><a href="Hpage.php">Home</a></li>
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
                    <h2>Registration Successful!</h2>
				 Please login below:
                 
                 <!--Login form-->
					<form name="form1" method="post" action="CheckLogin.php" style="margin-left: 28%">
					<table width="100%" border="0" cellpadding="3" cellspacing="1">
					<tr>
						<td colspan="3"><strong>Member Login </strong></td>
					</tr>
					<tr>
						<td style="width: 83px">Email</td>
						<td>:</td>
						<td><input name="email" type="text" id="email"/></td>
					</tr>
					<tr>
						<td style="width: 83px">Password</td>
						<td>:</td>
						<td><input name="password" type="password" id="password"/></td>
					</tr>
					<tr>
						<td style="width: 83px">&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Submit" value="Login"/></td>
					</tr>
					</table>
					</form>
	          
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