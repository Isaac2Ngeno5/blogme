<?php
require "connect.php";

//$sql="SELECT username,email FROM blogme WHERE id='100'";
$sql = "SELECT * FROM `users` WHERE email='script@gmail.com' AND password='1234'";
		$result = mysqli_query($conn, $sql) or die(msqli_error($conn));
		//$row = mysqli_fetch_array($result);

		// the user input is checked if correct the user is logged in
		if (mysql_num_rows($result) == 1) {
			$row = mysqli_fetch_array($result);
		    //$_SESSION["username"] = 
		    echo $row["username"];
		} else {
		    echo "Error: " ."invalid login credentials";
		}

mysqli_close($con);
?>