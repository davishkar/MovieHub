<?php
$servername = "localhost";
$username = "root";  // Use your database username
$password = "";      // Use your database password
$dbname = "moviehub_db";  // The name of the database

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
