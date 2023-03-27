<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Validation</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];

	// Validation checks
	if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)) {
		echo "All fields are required.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format.";
	} elseif ($password != $confirmpassword) {
		echo "Passwords do not match.";
	} else {
		echo "Successfully Registered.";
	}
}
?>
<br>
<a href="user_login.html">Log in</a>
</body>
</html>