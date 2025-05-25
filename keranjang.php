<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$keranjang = $_SESSION['keranjang'] ?? [];

if (isset($_GET['hapus'])) {
    $hapus_id = $_GET['hapus'];
    unset($_SESSION['keranjang'][$hapus_id]);
    header("Location: keranjang.php");
    exit;
}

$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-5">
    <h2>Keranjang Belanja</h2>
    <?php if (empty($keranjang)) : ?>
        <p>Keranjang Anda kosong.</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($keranjang as $item): 
                    $subtotal = $item['harga'] * $item['jumlah'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?= $item['nama']; ?></td>
                    <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                    <td><?= $item['jumlah']; ?></td>
                    <td>Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                    <td>
                        <a href="keranjang.php?hapus=<?= $item['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h4>Total: Rp <?= number_format($total, 0, ',', '.'); ?></h4>
        <form method="post" action="struk.php">
            <button class="btn btn-success">Checkout</button>
        </form>
    <?php endif; ?>
    <a href="bt_earphone.php" class="btn btn-secondary mt-3">Kembali Belanja</a>
</div>
</body>
</html
