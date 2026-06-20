<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$q = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if(mysqli_num_rows($q) > 0) {
    $data = mysqli_fetch_assoc($q);
    
    if($password == $data['password']) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        
        header("location:index.php");
        exit; 
    } else {
        $error = "Password yang Anda masukkan salah!";
    }
} else {
    $error = "Akun tidak ditemukan!";
}


header("location:login.php?error=" . urlencode($error));
exit; // TAMBAHIN EXIT DI SINI JUGA
?>
