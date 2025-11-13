<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM film WHERE id_film = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data film berhasil dihapus'); window.location.href='HalamanUtama.php';</script>";
}

$conn->close();
?>