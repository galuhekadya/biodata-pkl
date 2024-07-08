<!DOCTYPE html>
<html>

<head>
    <title>PKL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        body {
            background-color: #fef6e4;
        }

        td {
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh;">

        <center>
            <h2>Sarastya Technology Integrata</h2>
            <br />
            <a class="aksi" href="index.php">Kembali</a>
            <br />
            <br />
            <h3>Biodata Anggota PKL di Sarastya Technology Integrata</h3>
            <form method="post" action="tambak_anggota.php">

                <table>
                    <tr>
                        <td>Nama Lengkap :</td>
                        <td><input type="text" name="nama_lengkap" class="input-control" required>
                    </tr>
                    <tr>
                        <td>Nama Panggilan :</td>
                        <td><input type="text" name="nama_panggilan" class="input-control" required>
                    </tr>
                    <tr>
                        <td>Asal Sekolah :</td>
                        <td><input type="text" name="asal_sekolah" class="input-control" required>
                    </tr>
                    <tr>
                        <td>Kelas :</td>
                        <td><input type="text" name="kelas" class="input-control" required>
                    </tr>
                    <tr>
                        <td>Jurusan :</td>
                        <td><input type="text" name="jurusan" class="input-control" required>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <td><input type="text" name="alamat" class="input-control" required>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input class="simpan" type="submit" value="Simpan"></td>

                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>

</html>