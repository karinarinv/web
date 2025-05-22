<?php
    include "koneksi.php";
    session_start();

    if(isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
        $id = $_COOKIE['id'];
        $username = $_COOKIE['username'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);

        if($username === hash('sha256', $row['username'])) {
            $_SESSION['login'] = true;
        }
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
    
            if(password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;

                if(isset($_POST["remember"])) {
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('username', hash('sha256', $row['username']), time() + 60);
                }
                header("Location: web.php");
                exit;
            };
        }

        echo "<script> 
            alert('username atau password salah')
        </script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Daftar Akun</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-center">
      <a class="navbar-brand text-white fw-bold" href="web.php">AUDIORA</a>
    </div>
</nav>

<div class="main-content">
    <form action="" method="post" class="login-card">
        <h1>Login Akun</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required><br>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
        
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label><br>
        
        <input type="submit" value="Login" name="login">
    </form>
</div>
</body>

</html>
