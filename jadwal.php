<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="hero-banner"><h1>Pilih Jadwal</h1></div>
<div class="main-content"><div class="card">
    <div class="schedule-list">
        <?php $q = mysqli_query($conn, "SELECT * FROM travel");
        while($row = mysqli_fetch_assoc($q)) { echo '
        <div class="time-card" onclick="window.location=\'kursi.php?id='.$row['id'].'\'">
            <div><strong>'.$row['jam'].' WIB</strong><div style="font-size:12px;color:#888;">'.$row['rute'].'</div></div>
            <div class="price">Rp '.number_format($row['harga']).'</div>
        </div>'; } ?>
    </div>
    <button class="btn btn-back" onclick="window.location='index.php'">Kembali</button>
</div></div>
</body>
</html>