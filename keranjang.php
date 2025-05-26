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
    <style>
    body {
        background-color: #EEE2DF;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1400px;
        background: #fff;
        margin: 40px auto;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        color: #5B61B2;
        margin-bottom: 20px;
    }

    table.table {
        background-color: #8e7f6c;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    table.table th {
        background-color: #E0CCBE;
        color: #333;
        text-align: center;
    }

    table.table td {
        text-align: center;
    }

    .btn-danger {
        background-color: #B85042;
        border: none;
    }

    .btn-danger:hover {
        background-color: #9b3b2f;
    }

    .btn-success {
        background-color: #5B61B2;
        border: none;
    }

    .btn-success:hover {
        background-color: #8e7f6c;
    }

    .btn-secondary {
        background-color: #5B61B2;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #8e7f6c;
    }

    .form-label{
        font-weight: bold;
        color:rgb(79, 79, 79)
    }

    .form-check-input:checked {
        background-color: #5B61B2;
        border-color: #5B61B2;
    }
    </style>
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
    <div class="mb-3">
        <label class="form-label">Metode Pembayaran:</label><br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="metode_pembayaran" value="Transfer Bank" id="transfer" required>
            <label class="form-check-label" for="transfer">Transfer Bank</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="metode_pembayaran" value="Mobile Banking" id="mbanking">
            <label class="form-check-label" for="mbanking">Mobile Banking</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="metode_pembayaran" value="Cash" id="mbanking">
            <label class="form-check-label" for="mbanking">Cash</label>
        </div>        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="metode_pembayaran" value="QRIS" id="qris">
            <label class="form-check-label" for="qris">QRIS</label>
        </div>
    </div>
    <button class="btn btn-success">Checkout</button>
</form>

    <?php endif; ?>
    <a href="bt_earphone.php" class="btn btn-secondary mt-3">Kembali Belanja</a>
</div>
</body>
</html
