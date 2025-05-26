<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["produk_id"])) {
    $produk_id = $_POST["produk_id"];
    $result = mysqli_query($conn, "SELECT * FROM wired_earphone WHERE id = $produk_id");
    $produk = mysqli_fetch_assoc($result);

    if (!isset($_SESSION['keranjang'])) $_SESSION['keranjang'] = [];
    $keranjang = &$_SESSION['keranjang'];

    if (isset($keranjang[$produk_id])) {
        $keranjang[$produk_id]['jumlah'] += 1;
    } else {
        $keranjang[$produk_id] = [
            'id' => $produk['id'],
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'gambar' => $produk['gambar'],
            'jumlah' => 1
        ];
    }

    header("Location: wr_earphone.php");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM wired_earphone");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    <title>Wired Earphone</title>
    <link rel="stylesheet" href="wr_earphone.css"/>
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
                            <li><a class="dropdown-item" href="speaker.php">Speaker</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <?php if (isset($_SESSION["login"])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= htmlspecialchars($_SESSION["username"]); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="drop-login" href="logout.php"><i class="bi bi-box-arrow-right me-1"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                            <ul class="dropdown-menu">
                                <li><a class="drop-login" href="login.php"><i class="bi bi-person me-1"></i>Sign In</a></li>
                                <li><a class="drop-login" href="register.php"><i class="bi bi-person me-1"></i>Sign Up</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Wired Earphone</h2>
        <a href="keranjang.php" class="btn btn-lihat mb-3"><i class="bi bi-eye me-1"></i>Lihat Keranjang</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php while($row = mysqli_fetch_assoc($query)) { ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="img/<?= htmlspecialchars($row['gambar']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row['nama']); ?>">
                    <div class="card-body text-center">
                        <h5><?= htmlspecialchars($row['nama']); ?></h5>
                        <p>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></p>
                        <form method="post">
                            <input type="hidden" name="produk_id" value="<?= $row['id']; ?>">
                            <button class="btn btn-tambah" type="submit"><i class="bi bi-cart-plus me-1"></i>Tambah ke Keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
