<?php

if(isset($_SESSION['username'])){
    header("location: HalamanUtama.php");
    exit();
}

if(isset($_POST['login'])){
    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("location: HalamanUtama.php");
        exit();
    } else {
        echo "<script>alert('Username atau password salah!'); window.location.href = 'Login.php';</script>";
    }
}
?>