<?php
include 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$asal_sekolah = $_POST['asal_sekolah'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "insert into anggota values('','$nama_lengkap','$nama_panggilan','$asal_sekolah','$kelas','$jurusan','$alamat')");
header("location:index.php");
