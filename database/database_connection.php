<?php
function database(){

	$servername = "eu-cdbr-azure-north-b.cloudapp.net";
	$username = "bf3c7cd016fb44";
	$password = "134bea17";
	$db = "csgorankingsdata";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}
?>