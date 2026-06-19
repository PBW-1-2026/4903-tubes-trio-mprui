<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
</head>
<body>

    <h2>Edit Profil Saya</h2>
    
  <form action="proses_edit.php" method="POST">
        
       <label>Nama:</label>
        <br>
        <input type="text" name="nama" required>
        <br><br>

         <label>No hp</label>
        <br>
        <input type="text" name="no_hp" required>
        <br><br>

        <label>Password:</label>
        <br>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit" name="simpan">Simpan Perubahan</button>
    </form>

</body>
</html>