<?php 
include 'koneksi.php'; 
$id = $_GET['id'];
$id = mysqli_real_escape_string($conn, $id);

$q = mysqli_query($conn, "SELECT no_kursi FROM transaksi WHERE id_travel = '$id' AND (status='lunas' OR (status='pending' AND expired_at > NOW()))");
$terisi = []; 
while($r = mysqli_fetch_assoc($q)) { 
    $terisi[] = $r['no_kursi']; 
} 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hero-banner"><h1>Pilih Kursi</h1></div>
<div class="main-content">
<div class="card">
<form action="pembayaran.php" method="POST">
    <input type="hidden" name="id_travel" value="<?php echo $id; ?>">
    
    <div style="background:#f4f6f9; border:2px solid #ccc; border-radius:8px; padding:20px; max-width:320px; margin:0 auto 20px;">
        
        <div style="display:flex; justify-content:space-between; background:#333; color:#fff; padding:5px 10px; font-size:11px; font-weight:bold; margin-bottom:25px; border-radius:4px;">
            <div>[ SETIR ]</div>
            <div>DEPAN / KACA</div>
        </div>

        <div class="grid-kursi" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; row-gap: 25px;">
            <?php 
            $layout = [
                1,  'jalan', 'kosong',
                2,  'jalan', 3,
                4,  'jalan', 5,
                6,  'jalan', 7,
                8,  'jalan', 9,
                10, 'jalan', 11,
                12, 'jalan', 'kosong'
            ];

            foreach($layout as $slot) {
                if ($slot === 'jalan') {
                    echo '<div></div>';
                } elseif ($slot === 'kosong') {
                    echo '<div></div>';
                } else {
                    $i = $slot;
                    $dis = in_array($i, $terisi) ? 'disabled' : '';
                    $bg_color = in_array($i, $terisi) ? '#e74c3c; color:#fff;' : '#fff; color:#333;';
                    
                    echo '
                    <label class="kursi-item '.$dis.'" style="display:block; background:'.$bg_color.' border:2px solid #bbb; border-radius:6px; padding:12px 0; text-align:center; font-weight:bold; cursor:pointer; position:relative;">
                        <input type="radio" name="no_kursi" value="'.$i.'" '.$dis.' required> '.$i.'
                    </label>';
                }
            }
            ?>
        </div>
    </div>

    <div style="display:flex; justify-content:center; gap:15px; font-size:12px; margin-bottom:20px;">
        <div><span style="display:inline-block; width:12px; height:12px; background:#fff; border:1px solid #bbb;"></span> Tersedia</div>
        <div><span style="display:inline-block; width:12px; height:12px; background:#e74c3c;"></span> Terisi</div>
    </div>

    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <button type="submit" name="submit" class="btn">Booking Sekarang</button>
</form>
</div>
</div>
</body>
</html>