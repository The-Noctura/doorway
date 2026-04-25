<?php
session_start();
include '../includes/koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST["password"];
$konfirmasi_password = $_POST["konfirmasi_password"];

// cek password sama atau ga
if($password !== $konfirmasi_password){
    die("Password Konfirmasi Salah!");
}

// cek username ada atau ga
$cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
if(mysqli_num_rows($cek) > 0){
    die("Username Sudah Di Pakai!");
}

//simpan ke database
$sql = "INSERT INTO users (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: /doorway/pages/login.php");
    exit();
} else {
    echo "Gagal daftar: " . mysqli_error($conn);
}


?>