<?php
$host = "sql108.infinityfree.com"; // Your InfinityFree hostname
$username = "if0_39649374";   // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "if0_39649374_ps5_db";  // Your database name

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>