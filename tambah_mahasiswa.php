<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form  Tambah mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<br>
<h1>Form Tambah Mahasiswa</h1>

<div class="kotak_login">
    <p class="tulisan_login">Tambah Data</p>

    <form action="simpan_mahasiswa.php" method="POST">
    
        <label for="">Nama</label>
        <input type="text" name="nama" class="form_login">

        <label for="">NIM</label>
        <input type="number" name="nim" class="form_login">

        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form_login">
        <br>
        <input type="submit" class="tombol_login" value="SIMPAN">
        <br/>
    </form>
</div>
    
</body>
</html>