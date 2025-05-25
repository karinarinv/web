<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"] ?? 'Pengguna';
$keranjang = $_SESSION['keranjang'] ?? [];
$total = 0;
$diskon = 0.10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Struk Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-5">
    <h2>Struk Pembelian</h2>
    <p>Nama Pengguna: <strong><?= htmlspecialchars($username); ?></strong></p>

    <?php if (empty($keranjang)) : ?>
        <p>Tidak ada item di keranjang.</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($keranjang as $item): 
                    $subtotal = $item['harga'] * $item['jumlah'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?= $item['nama']; ?></td>
                    <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                    <td><?= $item['jumlah']; ?></td>
                    <td>Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php 
        $jumlah_diskon = $total * $diskon;
        $total_akhir = $total - $jumlah_diskon;
        ?>
        <div class='alert alert-success'>Anda mendapatkan diskon member 10%</div>
        <p>Subtotal: Rp <?= number_format($total, 0, ',', '.'); ?></p>
        <p>Diskon 10%: Rp <?= number_format($jumlah_diskon, 0, ',', '.'); ?></p>
        <h5><strong>Total Akhir: Rp <?= number_format($total_akhir, 0, ',', '.'); ?></strong></h5>
    <?php endif; ?>

    <a href="bt_earphone.php" class="btn btn-primary mt-3">Kembali ke Belanja</a>
</div>

<?php
unset($_SESSION['keranjang']);
?>
</body>
</html>
