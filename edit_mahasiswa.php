<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form  Edit mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
$d = mysqli_fetch_array($data);
?>


<h1>Form Edit Mahasiswa</h1>

<div class="kotak_login">
    <p class="tulisan_login">Edit Data</p>

    <form action="update_mahasiswa.php" method="POST">

        <label for="">Nama</label>
        <input type="hidden" name="id" class="form_login" value="<?php echo "$d[id]"; ?>">
        <input type="text" name="nama" class="form_login" value="<?php echo "$d[nama]"; ?>">

        <label for="">NIM</label>
        <input type="number" name="nim" class="form_login" value=<?php echo "$d[nim]"; ?>>

        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form_login" value=<?php echo "$d[alamat]"; ?>>
        <br>
        <input type="submit" class="tombol_login" value="UPDATE">
        <br/>
    </form>
</div>

</body>
</html>