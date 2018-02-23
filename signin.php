<?php
	require "connect.php";

	$email = $_POST["email"];
	$password = $_POST["password"];

	$email = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["email"])) {
			echo "email is reguired";
		}else{
			$email = test_input($_POST["email"]);
		}

		if (empty($_POST["password"])) {
			echo "password is reguired";
		}else{
			$password = test_input($_POST["password"]);
		}

		//this is where the user input is cross checked with data in the database

		$sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_array($result)) {
		    	//start session
				session_start();
		        $_SESSION['username'] = $row["username"];
		        if (!empty($_SESSION)) {
		        	header("location: home.php");
		        }else if (empty($_SESSION)) {
		        	header("location:signin.html");
		        } else {
		        	echo "yeah!!! whatever bitch!"
		        }
		        
		    }
		} else {
		    echo "0 results";
		}

		$conn->close();

	}

//this function filters the user input and guards against attacks
// it takes the user input as its parameter
function test_input($data) {
  $data = trim($data);//strip unnecessary characters
  $data = stripslashes($data);// removes backslashes
  $data = htmlspecialchars($data);// invalidates tags in the user input
  return $data;
}

?>