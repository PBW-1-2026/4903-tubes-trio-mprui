<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Akun</title>
</head>
<body>

    <div class="hero-banner">
        <h1>Buat Akun</h1>
        <p>Silakan isi data diri Anda</p>
    </div>

    <div class="main-content">
        <div class="card">
            <form action="proses_register.php" method="POST">
                <div class="input-group">
                    <label>USERNAME</label>
                    <input type="text" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="input-group">
                    <label>PASSWORD</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="input-group">
                    <label>TANGGAL LAHIR</label>
                    <input type="date" name="tgl_lahir" required>
                </div>
                <div class="input-group">
                    <label>NOMOR HP</label>
                    <input type="number" name="no_hp" placeholder="Contoh: 08123456789" required>
                </div>
                <button type="submit" name="register" class="btn">Daftar Sekarang</button>
                <p style="text-align:center; margin-top:20px; font-size: 14px;">
                    Sudah punya akun? <a href="login.php" style="color:var(--primary); font-weight:bold; text-decoration:none;">Login</a>
                </p>
            </form>
        </div>
    </div>

</body>
</html>