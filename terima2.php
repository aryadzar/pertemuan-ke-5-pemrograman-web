<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan Web ke - 5</title>
</head>
<body>
    <form action="terima.php" method="POST">
    <label>Nama</label>
    <input type="text" name="nama" value="<?php
    echo $_POST["nama"];
    ?>"><br><br>
    <label>Jenis Kelamin</label><br><br>
    <input type="radio" name="jk" value="laki-laki">laki-laki
    <input type="radio" name="jk" value="Perempuan">perempuan <br>
    <input type="submit" value="Kirim">
    </form>
</body>
</html>