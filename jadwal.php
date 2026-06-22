<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pilih Jadwal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .card-table-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .schedule-table th, .schedule-table td {
            padding: 14px 16px;
            border-bottom: 1px solid #eee;
        }
        .schedule-table th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: 600;
        }
        .schedule-table tr.row-link {
            cursor: pointer;
            transition: background 0.2s;
        }
        .schedule-table tr.row-link:hover {
            background-color: #f1f7ff;
        }
        .price { color: #ff5722; font-weight: bold; }
        .btn-area { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>

<div class="hero-banner"><h1>Pilih Jadwal</h1></div>

<div class="main-content">
    <div class="card-table-container">
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Jam Keberangkatan</th>
                    <th>Rute Travel</th>
                    <th>Harga Tiket</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $q = mysqli_query($conn, "SELECT * FROM travel");
                while($row = mysqli_fetch_assoc($q)) { 
                ?>
                <tr class="row-link" onclick="window.location='kursi.php?id=<?= $row['id']; ?>'">
                    <td><strong><?= $row['jam']; ?> WIB</strong></td>
                    <td><span style="color: #555;"><?= $row['rute']; ?></span></td>
                    <td class="price">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="btn-area">
        <button class="btn btn-back" onclick="window.location='index.php'">Kembali</button>
    </div>
</div>

</body>
</html>