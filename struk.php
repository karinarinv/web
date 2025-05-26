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
<style> 
    body {
    background-color: #fbf5f4;
    font-family: 'Courier New', Courier, monospace;
    font-size: 14px;
    color: #000;
}

.container {
    max-width: 800px;
    min-height: auto;
    background: #fff;
    margin: 30px auto;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

h1 {
  text-align: center;
  font-family: "Oswald", sans-serif;
  font-size: 2rem;
  font-weight: bold;
}

h2 {
    text-align: center;
    font-weight: bold;
    margin-bottom: 10px;
}

hr {
    border: none;
    border-top: 1px dashed #ccc;
    margin: 10px 0;
}

.table {
    width: 100%;
    margin-bottom: 0;
}

.table th,
.table td {
    padding: 4px;
    vertical-align: top;
}

.table thead th {
    border-bottom: 1px dashed #000000;
    font-weight: bold;
    text-align: left;
}

.table tbody td {
    border: none;
}

.alert {
    padding: 6px 10px;
    font-size: 17px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0;
    background-color:rgb(189, 181, 170);
    color:rgb(85, 76, 74);
    border: 1px solid rgb(189, 181, 170);
}

.text-right {
    text-align: right;
}

.text-center {
    text-align: center;
}

.receipt-footer {
    text-align: center;
    margin-top: 20px;
    font-weight: bold;
    color: #000;
}

.btn {
    font-size: 15px;
    padding: 10px 20px;
    background-color: #5B61B2;
    color: #EEE2DF;
    display: inline-block;       
    text-align: center;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
    margin: 10px;
}

.btn:hover {
    background-color: #8e7f6c;
    color: #333;
}


.small-text {
    font-size: 12px;
    color: #000000;
    text-align: center;
}

.total-line {
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    padding-top: 5px;
    border-top: 1px dashed #000000;
}
</style>
<body>
<div class="container mt-5">
    <h1>AUDIORA</h1>
    <h2>Struk Pembelian</h2>
    <p><strong>Nama Pelanggan :<?= htmlspecialchars($username); ?></strong></p>

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
        $metode_pembayaran = $_POST['metode_pembayaran'] ?? 'Tidak dipilih';
        ?>
        <div class='alert alert-success'>Anda mendapatkan diskon member 10%</div>
        <p>Subtotal: Rp <?= number_format($total, 0, ',', '.'); ?></p>
        <p>Diskon 10%: Rp <?= number_format($jumlah_diskon, 0, ',', '.'); ?></p>
        <h5><strong>Total Akhir: Rp <?= number_format($total_akhir, 0, ',', '.'); ?></strong></h5>
        <p><strong>Metode Pembayaran: <?= htmlspecialchars($metode_pembayaran); ?></strong></p>

    <?php endif; ?>
</div>
<div style="text-align: center;">
<a href="bt_earphone.php" class="btn btn-primary mt-3">Kembali Belanja</a>
</div>

<?php
unset($_SESSION['keranjang']);
?>
</body>
</html>
