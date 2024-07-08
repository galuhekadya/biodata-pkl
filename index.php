<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>PKL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <center>
        <h2 style="color:#001858;">Sarastya Technology Integrata</h2>
    </center>
    <br />
    <a class="tam" href="tambah_anggota.php">+ TAMBAH ANGGOTA</a></div>
    <br />
    <br />
    <table class="table" border="2">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Asal sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_lengkap']; ?></td>
                <td><?php echo $d['nama_panggilan']; ?></td>
                <td><?php echo $d['asal_sekolah']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a class="aksi" href="update_anggota.php?id=<?php echo $d['id_anggota']; ?>">UPDATE</a>
                    <a class="aksi" href="delete_anggota.php?id=<?php echo $d['id_anggota']; ?>" onclick="return confirm('Yakin ingin hapus ?')">DELETE</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>