<?php
$penghubung = mysqli_connect("localhost", "root", "", "akademik");

// Cek koneksi
if (mysqli_connect_error()) {
    echo "Koneksi Database Gagal: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $tlpn = $_POST["tlpn"];

    // Query SQL untuk menyimpan data
    $query = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, alamat, agama, tlpn) VALUES ('$nama', '$nim', '$jenis_kelamin', '$alamat', '$agama', '$tlpn')";

    if (mysqli_query($penghubung, $query)) {
        // Data berhasil disimpan, arahkan kembali ke halaman formulir
        header("Location: index.php");
        exit;
    } else {
        // Kesalahan saat menyimpan data
        echo "Terjadi kesalahan: " . mysqli_error($penghubung);
    }
}
?>