<?php
$koneksi=mysqli_connect("localhost","root","","sekolah");

// Check Connection
if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal". mysqli_connect_error();
}
?>