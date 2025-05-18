<?php
include 'koneksi.php';
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

//ngambil dari tabel
$query = mysqli_query($conn, "SELECT * FROM bluetooth_earphone");

//ngambil data 
//$result = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="bt_earphone.css" />
    <title>Bluetooth Earphone</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-center">
        <a class="navbar-brand" href="web.php">AUDIORA</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-lg-auto me-lg-5 mb-2 mb-lg-0 align-items-lg-center">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
                </a>
                <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Earphone</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="bt_earphone.php">Bluetooth Earphone</a></li>
                    <li><a class="dropdown-item" href="wr_earphone.php">Wired Earphone</a></li>
                    <li><a class="dropdown-item" href="bt_headphone.php">Bluetooth Headphone</a></li>

                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <li><a class="dropdown-item" href="speaker.php">Speaker</a></li>
                </li>
                </ul>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Login
                </a>
                <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <li class="nav-item">
                    <a class="drop-login" href="login.php">
                        <i class="bi bi-person me-1"></i>Sign In
                    </a>
                    </li>
                </li>
                <li class="dropdown-submenu">
                    <li class="nav-item">
                    <a class="drop-login" href="register.php">
                        <i class="bi bi-person me-1"></i>Sign Up
                    </a>
                    </li>
                </li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="searchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-search"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-search">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Go</button>
                </form>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php while($row = mysqli_fetch_assoc($query)) { ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="img/<?= $row['gambar']; ?>" class="card-img-top" alt="<?= $row['nama']; ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $row['nama']; ?></h5>
                        <p class="card-text">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
</body>
</html>
