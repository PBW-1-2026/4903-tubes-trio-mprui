<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="hero-banner">
    <h1>Informasi Akun</h1>
</div>

<div class="main-content">
    <div class="card">
        <form>
            <div class="input-group">
                <label>Username</label>
                <input type="text" value="<?php echo $_SESSION['username']; ?>" readonly>
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" value="********" readonly>
            </div>

            <a href="index.php" class="btn" style="display: block; text-align: center; text-decoration: none; box-sizing: border-box;">
                Kembali ke Beranda
            </a>
        </form>
    </div>
</div>

</body>
</html>