<?php include 'koneksi.php';
if(isset($_POST['submit'])) {
    $expired = date('Y-m-d H:i:s', strtotime('+30 minutes'));
    mysqli_query($conn, "INSERT INTO transaksi (id_travel, nama_pemesan, no_kursi, status, expired_at) VALUES ('{$_POST['id_travel']}', '{$_POST['nama']}', '{$_POST['no_kursi']}', 'pending', '$expired')");
} ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="hero-banner"><h1>Pembayaran</h1></div>
<div class="main-content">
    <div class="card" style="text-align:center; display: flex; flex-direction: column; align-items: center; gap: 10px;">
        <h3>Selesaikan dalam:</h3>
        <div id="timer" style="font-size: 32px; font-weight: 800; color: var(--primary); font-family: monospace;">30:00</div>
        
        <div style="width: 100%; max-width: 250px; border: 2px dashed #eee; padding: 10px; border-radius: 15px;">
            <img src="qris.jpeg" alt="QRIS" style="width: 100%; display: block; border-radius: 8px;">
        </div>
        <p style="font-size: 12px; color: #888;">Scan QRIS di atas untuk membayar</p>
        
        <a href="index.php" 
           class="btn" 
           style="background: #25D366; text-decoration: none; max-width: 250px; display: block; margin-top: 5px;">
           Sudah Bayar
        </a>

        <button class="btn" style="max-width: 250px; background: #f0f0f0; color: #333;" onclick="window.location='index.php'">Kembali ke Beranda</button>
    </div>
</div>
<script>
    let time = 1800;
    setInterval(() => {
        let m = Math.floor(time/60), s = time%60;
        document.getElementById('timer').innerHTML = m + ":" + (s<10?'0':'')+s;
        if(time > 0) time--;
    }, 1000);
</script>
</body>
</html>
