<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "doorway_db";

$conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die("Gagal koneksi: " . mysqli_connect_error());
    }



?>