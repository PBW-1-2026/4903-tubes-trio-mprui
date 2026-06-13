<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>TravelApp - Professional</title>
</head>
<body>

    <div class="hero-banner">
        <h1 style="margin:0;">Halo, Traveler!</h1>
        <p style="opacity: 0.9; margin: 5px 0;">Mau ke mana hari ini?</p>
    </div>

<div class="card">
    <form action="jadwal.php" method="GET">
        <label>JENIS KENDARAAN</label>
        <div class="option-grid">
            <label class="option-card"><input type="radio" name="jenis" value="mobil" checked><i class="fas fa-car"></i> Mobil</label>
            <label class="option-card"><input type="radio" name="jenis" value="bus"><i class="fas fa-bus"></i> Bus</label>
        </div>

        <div class="input-group">
            <label>LOKASI ASAL & TUJUAN</label>
            <input type="text" name="asal" placeholder="Dari mana?">
            <input type="text" name="tujuan" placeholder="Ke mana?" style="margin-top:8px;">
        </div>

        <div class="input-group">
            <label>TANGGAL KEBERANGKATAN</label>
            <input type="date" name="tanggal">
        </div>

        <button class="btn" type="submit">Cari Tiket Sekarang</button>
    </form>
</div>


</body>
</html>