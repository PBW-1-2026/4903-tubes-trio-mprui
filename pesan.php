<?php
include 'koneksi.php';

$id_travel = $_GET['id']; // ID jadwal travel

// 1. Ambil kursi yang udah dipesan (pending/lunas)
$query = mysqli_query($conn, "SELECT no_kursi FROM transaksi WHERE id_travel = '$id_travel' AND (status = 'lunas' OR (status = 'pending' AND expired_at > NOW()))");
$kursi_terisi = [];
while($row = mysqli_fetch_assoc($query)) {
    $kursi_terisi[] = $row['no_kursi'];
}

// 2. Logic buat insert pas user submit pilih kursi
if(isset($_POST['pilih_kursi'])) {
    $nama = $_POST['nama'];
    $kursi = $_POST['no_kursi'];
    
    // Cek lagi apakah kursi udah ada yang ambil
    if(!in_array($kursi, $kursi_terisi)) {
        $expired = date('Y-m-d H:i:s', strtotime('+30 minutes'));
        $sql = "INSERT INTO transaksi (id_travel, nama_pemesan, no_kursi, status, expired_at) VALUES ('$id_travel', '$nama', '$kursi', 'pending', '$expired')";
        mysqli_query($conn, $sql);
        echo "Berhasil pesan! Segera bayar sebelum $expired";
    } else {
        echo "Kursi sudah diambil!";
    }
}
<div class="card">
    <h3>Pilih Kursi</h3>
    <form method="POST">
        <div class="grid-kursi" style="display:grid; grid-template-columns:repeat(4, 1fr); gap:10px;">
            <?php for($i=1; $i<=12; $i++): ?>
                <?php $disabled = in_array($i, $kursi_terisi) ? 'disabled' : ''; ?>
                <label class="kursi-item <?php echo $disabled; ?>">
                    <input type="radio" name="no_kursi" value="<?php echo $i; ?>" <?php echo $disabled; ?> required>
                    <?php echo $i; ?>
                </label>
            <?php endfor; ?>
        </div>
        <input type="text" name="nama" placeholder="Nama Lengkap" required style="margin: 20px 0;">
        <button type="submit" name="pilih_kursi" class="btn">Booking Sekarang</button>
    </form>
</div>
?>