<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user["password"])) {
            $_SESSION['user'] = $user["name"];
            header("Location: home.html");
            exit;
        } else {
            //  Wrong password → go back to login page
            header("Location: login.html?error=wrongpassword");
            exit;
        }
    } else {
        //No user found → go back to login page
        header("Location: login.html?error=nouser");
        exit;
    }
}
?>
