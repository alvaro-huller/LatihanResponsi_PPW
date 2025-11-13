<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="film.jpg" alt="" style="width: 100%; height: auto;">
            </div>
            <div class="col">
                <br>
                <h1 style="color:rgb(45, 64, 88)">Login</h1>
                <p>Masukkan username dan password</p>
                <form action="OpLogin.php" method="post">
                    <label for="username" class="form-label">Username</label><br>
                    <input type="text" name="username" class="form-control" required><br>
                    <label for="password" class="form-label">Password</label><br>
                    <input type="password" name="password" class="form-control" required><br>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form><br>
                <p>Belum punya akun? <a href="Register.php" class="text-decoration-none">Daftar di sini</a><br>Default: admin/admin</p>
            </div>
        </div>
</body>
</html>