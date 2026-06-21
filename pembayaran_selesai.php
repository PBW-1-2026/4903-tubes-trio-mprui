<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero-banner">
        <h1 style="margin:0;">Pembayaran Selesai!!</h1>
    </div>
<div class="main-content">
    <div class="card">
        <form action="jadwal.php" method="GET">
            <div class="input-group">
                <img src="chec.png" alt="centang" style="width: 25%; border-radius: 12px;">
            </div>
            <button class="btn" style="max-width: 250px;" onclick="window.location='index.php'">Kembali ke Beranda</button>
        </form>
    </div>
</div>

</body>
</html>//