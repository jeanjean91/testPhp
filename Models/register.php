<?php 
	session_start();

	include("database.php"); 
	 
	$username = "";
	$password = "";
	$id = 0;
	$update = false;

 		
	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		mysqli_query($dbcon , "INSERT INTO users (username, password) VALUES ('$username', '$password ')"); 
		$_SESSION['message'] = "user saved"; 
		header('location: ../Views/login.php');
	}
	else{
		echo "error";
	}