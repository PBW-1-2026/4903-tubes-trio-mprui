<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    exit; 
}

$id = $_GET['id'];

mysqli_query($conn, "UPDATE transaksi SET status='Lunas' WHERE id_transaksi='$id'");
?>

header("location:admin.php");
exit;
?>//