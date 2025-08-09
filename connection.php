<?php
$host = "sql108.infinityfree.com";
$username = "if0_39649374";
$password = "I5piWPNlUSgTjNF";
$dbname = "if0_39649374_ps5_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>