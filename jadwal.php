<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="hero-banner">
    <h1 style="margin:0;">Pilih Jadwal</h1>
    <p style="opacity: 0.9; margin: 5px 0;">Sesuai pilihanmu</p>
</div>

<div class="main-content">
    <div class="card">
        <h3>Jadwal Tersedia</h3>
        <div class="schedule-list">
            <div class="time-card" onclick="window.location='pesan.php?id=1'">
                <div>
                    <strong>08:00 WIB</strong>
                    <div style="font-size: 12px; color: #888;">Tersedia: 12 Kursi</div>
                </div>
                <div class="price">Rp 150.000</div>
            </div>

            <div class="time-card" onclick="window.location='pesan.php?id=2'">
                <div>
                    <strong>13:00 WIB</strong>
                    <div style="font-size: 12px; color: #888;">Tersedia: 8 Kursi</div>
                </div>
                <div class="price">Rp 175.000</div>
            </div>
        </div>

        <button class="btn btn-back" onclick="window.location='index.php'">Kembali</button>
    </div>
</div>

</body>
</html>