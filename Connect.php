<?php
        //database connection functions
		$db_hostname = 'localhost';
		$db_username = 'aislinnr';
		$db_password = 'sQae379!';
		$dbname = 'snysbarchive';

		$conn = mysql_connect($db_hostname, $db_username,$db_password); //connect to mySQL db
		if(!$conn) die("Unable to connect to MySQL: " . mysql_error());  //error message if connection unsuccessful

		mysql_select_db($dbname) or die("Unable to select database: " . mysql_error());//select database

	?>
