<?php
$servername = "tcp:ouvcutnxpc.database.windows.net";
$username = "woobs"@SERVER_ID;
$password = "SammalHabe1";
$db = "csgorankingsdatabase";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>