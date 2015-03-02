<?php
$servername = "ouvcutnxpc.database.windows.net,1433";
$username = "csgorankingsdatabase";
$password = "SammalHabe1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>