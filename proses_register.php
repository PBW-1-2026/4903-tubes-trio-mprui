<?php
include 'koneksi.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if(mysqli_num_rows($cek) > 0) {
        echo "Username sudah ada!";
    } else {

        mysqli_query($conn, "INSERT INTO users (username, password, tgl_lahir, no_hp, role) VALUES ('$username', '$password', '$tgl_lahir', '$no_hp', 'user')");
        header("location:login.php?success=1");
    }
}
?>
