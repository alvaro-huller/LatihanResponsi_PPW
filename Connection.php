<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "bioskop";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>