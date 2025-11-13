<?php
include "connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM film WHERE id_film = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <!-- header -->
    <div class="header birutua">
        <div class="container py-2 mx-2">
            <h1>Edit Film</h1>
            <p>Perbarui Informasi Film</p>
        </div>
    </div>
    <!-- form -->
    <div class="container py-4 mx-2">
        <form action="OpEditFilm.php" method="post">
            <label for="id_film" class="form-label">ID Film</label><br>
            <input type="number" name="id_film" class="form-control" value="<?= $row['id_film'] ?>" disabled><br>
            <input type="number" name="id_film" class="form-control" value="<?= $row['id_film'] ?>" hidden>
            <label for="judul_film" class="form-label">Judul Film</label><br>
            <input type="text" name="judul_film" class="form-control" value="<?= $row['judul_film'] ?>" required><br>
            <label for="sutradara" class="form-label">Sutradara</label><br>
            <input type="text" name="sutradara" class="form-control" value="<?= $row['sutradara'] ?>" required><br>
            <label for="harga_tiket" class="form-label">Harga Tiket (Rp)</label><br>
            <input type="number" name="harga_tiket" class="form-control" value="<?= $row['harga_tiket'] ?>" required><br>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="HalamanUtama.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
        </form>
    </div>
</body>
</html>