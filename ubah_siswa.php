<?php
include 'koneksi.php';
$id_siswa =$_POST['id_siswa'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"update siswa set nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_siswa='$id_siswa'");
header("location:index.php");
?>
