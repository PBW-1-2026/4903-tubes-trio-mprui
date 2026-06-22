<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("location:login.php?error=Akses ditolak! Anda bukan admin.");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin - ACC Tiket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="hero-banner"><h1>Admin</h1></div>

<div class="main-content">
    <div class="card">
        <h2>Daftar Tiket Menunggu ACC</h2>
        
        <table width="100%" border="1" cellspacing="0" cellpadding="10" style="text-align: left; border-collapse: collapse; margin-top: 20px;">
            <tr style="background-color: #f1f1f1;">
                <th>ID Transaksi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            
           <?php
            $q = mysqli_query($conn, "SELECT * FROM transaksi WHERE status='Pending'");
            
            while($row = mysqli_fetch_assoc($q)) { 
            ?>
            <tr id="baris-<?php echo $row['id_transaksi']; ?>">
                <td><?php echo $row['id_transaksi']; ?></td>
                <td><b style="color: orange;">Pending</b></td>
                <td>
                    <button onclick="accTiket(<?php echo $row['id_transaksi']; ?>)" class="btn" style="background: #2e7d32; padding: 5px 15px; color: white; border: none; border-radius: 4px; cursor: pointer;">ACC Tiket</button>
                </td>
            </tr>
            <?php 
            } 
            ?>
       </table>
    </div>
</div>

<script src="ajax.js"></script>

</body>
</html>