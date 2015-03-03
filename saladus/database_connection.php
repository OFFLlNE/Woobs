<?php
echo "proov";
$servername = "eu-cdbr-azure-north-b.cloudapp.net";
$username = "bf3c7cd016fb44";
$password = "134bea17";
$db = "csgorankingsdatabase";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
echo "$conn";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>