<?php
session_start();
include '../includes/koneksi.php';

$username = $_POST['username'];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: /doorway/index.html");
    exit();
} else {
    echo "Username atau password salah!";
}

?>