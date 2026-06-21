<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="hero-banner"><h1>Login</h1></div>

<?php if(isset($_GET['error'])): ?>
    <div style="background: #ffebee; color: #c62828; padding: 15px; border-radius: 12px; margin: 20px; text-align: center; border: 1px solid #ef9a9a;">
        <?php echo $_GET['error']; ?>
    </div>
<?php endif; ?>

<div class="main-content"><div class="card">
    <form action="proses_login.php" method="POST">
        </form>
</div></div>
<div class="main-content"><div class="card">
    <form action="proses_login.php" method="POST">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" name="login" class="btn">Masuk</button>
        
        <p style="text-align:center; margin-top:20px; font-size: 14px; color: #666;">
            Belum punya akun? <a href="register.php" style="color: var(--primary); font-weight: bold; text-decoration: none;">Daftar di sini</a>
        </p>
    </form>
</div></div>
</body>
</html>//