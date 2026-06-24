<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php'; 
$user = $_SESSION['username'];

$ambil = mysqli_query($conn, "SELECT * FROM transaksi WHERE nama_pemesan = '$user'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="hero-banner">
        <h2>Tiket Milik: <?= $user; ?></h2>
        <p>Berikut riwayat perjalananmu</p>
    </div>

    <div class="main-content">
        
        <a href="index.php" style="text-decoration: none; color: white; font-weight: bold;"> Kembali ke Beranda</a>
        <br><br>

        <?php while($row = mysqli_fetch_array($ambil)) { ?>
            
            <div class="card" id="tiket-<?= $row['id_transaksi']; ?>">
                <h3 style="margin-top: 0;">Kode Travel: #<?= $row['id_travel']; ?> ➔ Kursi: <?= $row['no_kursi']; ?></h3>
                
                <p style="color: #666; font-size: 14px;">
                    Status Pembayaran:<br>
                    <?php if(strtolower($row['status']) == 'pending') { ?>
                        <b style="color: orange;">Menunggu Pembayaran</b>
                    <?php } else { ?>
                        <b style="color: green;">LUNAS</b>
                    <?php } ?>
                </p>

                <?php if(strtolower($row['status']) == 'pending') { ?>
                    <div style="display: flex; gap: 10px;">
                        <a href="pembayaran.php?id=<?= $row['id_transaksi']; ?>" class="btn" style="background-color: orange; flex: 1; text-align: center; text-decoration: none; padding: 8px 0; border-radius: 4px; color: white;">Bayar Sekarang</a>
                        <button onclick="userCancelTiket(<?= $row['id_transaksi']; ?>)" class="btn" style="background-color: #c62828; flex: 1; border: none; border-radius: 4px; color: white; cursor: pointer; padding: 8px 0;">Cancel Tiket</button>
                    </div>
                <?php } ?>
            </div>

        <?php } ?>

    </div>

    <script src="ajax.js"></script>

</body>
</html>
//