<?php
include "connection.php";

$sql = "SELECT * FROM film";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <!-- header -->
    <div class="header birutua">
        <div class="container py-2 mx-2">
            <h1>Manajemen Film Bioskop</h1>
            <p>Selamat datang, <b><?= $_SESSION['username']; ?></b> | <a href="OpLogout.php" class="link-light text-decoration-none">Logout</a></p>
        </div>
    </div>
    <div class="container py-4 mx-2">
        <!-- button -->
        <a href="TambahFilm.php" class="btn btn-success">Tambah Film</a>
        <br><br>
        <!-- tabel -->
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th style="background-color:rgb(45, 64, 88);color:white;">ID</th>
                <th style="background-color:rgb(45, 64, 88);color:white;">Judul Film</th>
                <th style="background-color:rgb(45, 64, 88);color:white;">Sutradara</th>
                <th style="background-color:rgb(45, 64, 88);color:white;">Harga Tiket</th>
                <th style="background-color:rgb(45, 64, 88);color:white;">Aksi</th>
            </tr>
                <?php
                $total = 0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>",$row['id_film'],"</td>
                            <td>",$row['judul_film'],"</td>
                            <td>",$row['sutradara'],"</td>
                            <td> Rp ",$row['harga_tiket'],"</td>
                            <td><a href='EditFilm.php?id=",$row['id_film'],"' class='link-dark text-decoration-none'>Edit</a> | <a href='OpHapusFilm.php?id=",$row['id_film'],"' class='link-danger text-decoration-none'>Hapus</a></td>
                        </tr>
                        ";
                        $total = $total + ($row['harga_tiket']);
                    }
                }
                ?>
            <tr>
                <td colspan="3"><b>Total Harga Tiket</b></td>
                <td colspan="2"><b>Rp <?=$total;?></b></td>
            </tr>
        </table>
    </div>
</body>
</html>