<?php
include "connection.php";

$judul_film = $_POST['judul_film'];
$sutradara = $_POST['sutradara'];
$harga_tiket = $_POST['harga_tiket'];

$sql = "INSERT INTO film (judul_film, sutradara, harga_tiket) VALUES ('$judul_film', '$sutradara', '$harga_tiket')";
$conn->query($sql);

$conn->close();
header('location: HalamanUtama.php');
?>