<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    exit;
}

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi='$id'");
?>