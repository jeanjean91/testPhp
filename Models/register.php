<?php 
	session_start();

	include("/database.php"); 
	// $db = mysqli_connect('localhost', 'root', 'root', 'myPhpTest');

	// initialize variables
	$username = "";
	$password = "";
	$id = 0;
	$update = false;
 echo('allo');
	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		mysqli_query($dbcon , "INSERT INTO users (username, password) VALUES ('$username', '$password ')"); 
		$_SESSION['message'] = "user saved"; 
		header('location: index.php');
	}
	else{
		echo "error";
	}