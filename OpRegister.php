<?php
include "connection.php";

$nama_lengkap = $_POST["nama_lengkap"];
$username = $_POST["username"];
$password = $_POST["password"];
$kpassword = $_POST["kpassword"];

if($password === $kpassword) {
    $sql = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username', '$password', '$nama_lengkap')";
    $conn->query($sql);
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = 'Login.php';
    </script>";
}else {
    echo "<script>alert('Password tidak sesuai'); window.location.href = 'Register.php';</script>";
}
?>