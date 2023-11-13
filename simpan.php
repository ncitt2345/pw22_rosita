<?php
include 'proses.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$telp = $_POST['tlpn'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nm_mhs','$nim', '$jenis_kelamin', '$alamat', '$agama','$tlpn')");


header("location:index.php");