<!-- <?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ps5_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?> -->

<?php
$servername = "sql108.infinityfree.com"; // Check your account's SQL host
$username = "if0_39649374";       // Your account username
$password = "";    // The password you chose earlier
$dbname = "if0_39649374_ps5_db";  // Your full database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
