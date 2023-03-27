<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	$password = $_POST["password"];

	if (empty($email) || empty($password)) {
		echo "Both fields are required.";
	} elseif ($email == "user@gmail.com" && $password == "password") {
		header("Location: welcome.php?firstname=User");
	} else {
		echo "Invalid email or password.";
	}
}
?>