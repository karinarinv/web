<?php
    include "koneksi.php";

    if(isset($_POST["register"])) {
        $username = strtolower($_POST["username"]);
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if($password != $password2) {
            echo "<script> 
                alert('input password tidak sesuai')
            </script>";
        } else {
            

            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            $q = mysqli_query($conn, $query);

            if($q) {
                header("Location: login.php");
                exit;
            } else {
                echo "<script> 
                    alert('gagal registrasi')
                </script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
</head>
<body>
    <form action="" method="post">
        <h1> Registrasi Akun</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2"><br>
        <input type="submit" value="register" name="register">
    </form>
</body>
</html>
