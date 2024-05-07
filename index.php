<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Login Dengan PHP dan MySqli</title>
    
</head>
<body>
    <h2 class="header">Halaman Admin</h2>
    <br/>

    <link rel="stylesheet" href="style.css">

    <div class="container">
        <div class="sidebar">
            <ul>
                <li><h2>Sidebar</h2></li>
                <li><a  href="">Mahasiswa</a></li>
                <li><a  href="">Link</a></li>
                <li><a  href="">Link</a></li>
                <li>
                    <a  class="btn" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    <div>
        <h2 >CRUD DATA MAHASISWA</h2>
        <br/>
        <a class="btn" href="tambah_mahasiswa.php">+ tambah mahasiswa</a>
        <br/>
        <br/>
        <table class="table" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from mahasiswa");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['nim']; ?></td>
                    <td><?= $d['alamat']; ?></td>
                    <td>
                        <a class="btn_edit" href="edit_mahasiswa.php?id=<?= $d['id']; ?>">Edit</a>
                        <a class="btn_hapus" href="hapus_mahasiswa.php?id=<?= $d['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

    <br>
    <br>

    </div>
    </div>

</body>
</html>