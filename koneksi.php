<?php
$conn = mysqli_connect("localhost", "root", "", "travel_db");
if (!$conn) { die("Koneksi gagal: " . mysqli_connect_error()); }
mysqli_query($conn, "UPDATE transaksi SET status = 'cancelled' WHERE status = 'pending' AND expired_at < NOW()");
?>