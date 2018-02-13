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

		$sql = "SELECT `email`, `password` FROM `users` WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql) or die(msql_error($conn));
		$count = mysqli_num_rows($result);

		// the user input is checked if correct the user is logged in
		if ($count == 1) {
		    echo "login success";
		} else {
		    echo "Error: " ."invalid login credentials";
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