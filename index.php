<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TravelApp - Beranda</title>
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }
        .nav-links a:hover {
            text-decoration: underline;
        }
        .nav-links a.btn-login {
            background: white;
            color: var(--primary);
            padding: 8px 15px;
            border-radius: 8px;
            font-weight: bold;
        }
        .nav-links a.btn-login:hover {
            text-decoration: none;
            background: #f0f0f0;
        }
    </style>
</head>
<body>

    <div class="hero-banner">
        <div style="text-align: right;"> ... </div>
        <div class="navbar">
    <div style="font-size: 20px; font-weight: 800; letter-spacing: 1px;">TravelApp</div>
            <div class="nav-links">
                <?php if(isset($_SESSION['username'])): ?>
                    <a href="profil.php" style="color: white; text-decoration: none;">Profike
                    </a>
                    <a href="myticket.php">My Ticket & History</a>
                    <a href="logout.php" class="btn-login">Logout</a>
                    <a href="login.php" class="btn-login">Login / Daftar</a>
                <?php endif; ?>
            </div>
        </div>

        <h1 style="margin:0;">Halo, Traveler!</h1>
        <p style="opacity: 0.9; margin: 5px 0;">Mau ke mana hari ini?</p>
    </div>

<div class="main-content">
    <div class="card">
        <form action="jadwal.php" method="GET">
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
</div>

</body>
</html>