<!DOCTYPE html>
<html>
    <head>
        <title>KELAS XI RPL 2</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div style="display: flex; align-items: center; justify-content: center; height: 100vh;">

      <center> <h2>SMKN 11 MALANG</h2>
       <br/>
       <a class="aksi" href="index.php">KEMBALI</a>
       <br/>
       <br/>
       <h3>EDIT DATA SISWA</h3>

       <?php
       include 'koneksi.php';
       $id_siswa =$_GET['id'];
       $data = mysqli_query($koneksi,"select * from siswa where id_siswa='$id_siswa'");
       while($d= mysqli_fetch_array($data)){
        ?>
        <form method="post" action="ubah_siswa.php">
            <table>
                <tr>
                    <td>Nama :</td>
                    <td>
                        <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
                        <input type="text" name ="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label class="jk" for="jenis_kelamin">Jenis kelamin :</label></td>
                    <td>
                        <select class="jk" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select></td>
        </tr>
                <tr>
                    <td>Alamat :</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="simpan" type="submit" value="SIMPAN"></td>
                    <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
                </tr>
            </table>
       </center>
        </form>
        <?php
       }
       ?>

       </body>
       </html>