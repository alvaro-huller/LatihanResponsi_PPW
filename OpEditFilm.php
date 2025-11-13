<?php
include "connection.php";

$id_film = $_POST['id_film'];
$judul_film = $_POST['judul_film'];
$sutradara = $_POST['sutradara'];
$harga_tiket = $_POST['harga_tiket'];

$sql = "UPDATE film SET judul_film = '$judul_film', sutradara = '$sutradara', harga_tiket = '$harga_tiket' WHERE id_film = $id_film";
$conn->query($sql);

$conn->close();
header('location: HalamanUtama.php');
?>