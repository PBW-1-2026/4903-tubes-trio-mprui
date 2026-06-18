<?php include 'koneksi.php'; $id = $_GET['id'];
$q = mysqli_query($conn, "SELECT no_kursi FROM transaksi WHERE id_travel = '$id' AND (status='lunas' OR (status='pending' AND expired_at > NOW()))");
$terisi = []; while($r = mysqli_fetch_assoc($q)) { $terisi[] = $r['no_kursi']; } ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="hero-banner"><h1>Pilih Kursi</h1></div>
<div class="main-content"><div class="card">
<form action="pembayaran.php" method="POST">
    <input type="hidden" name="id_travel" value="<?php echo $id; ?>">
    <div class="grid-kursi"><?php for($i=1; $i<=12; $i++): $dis = in_array($i, $terisi) ? 'disabled' : ''; ?>
        <label class="kursi-item <?php echo $dis; ?>">
            <input type="radio" name="no_kursi" value="<?php echo $i; ?>" <?php echo $dis; ?> required> <?php echo $i; ?>
        </label><?php endfor; ?>
    </div>
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <button type="submit" name="submit" class="btn">Booking Sekarang</button>
</form>
</div></div>
</body>
</html>