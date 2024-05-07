<?php

include'../koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nim = $_POST['nim'];


 
mysqli_query($koneksi, "INSERT INTO mahasiswa(id,nama,nim,alamat) VALUES('','$nama','$nim','$alamat')");
 
header("location:index.php");