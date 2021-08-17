<?php
include('config.php');

$kd_buku = $_POST['kd_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

$result = mysqli_query($conn, "INSERT INTO data_buku (kd_buku, judul, penulis, penerbit, tahun_terbit) VALUES ('$kd_buku', '$judul', '$penulis', '$penerbit', '$tahun_terbit')");

if ($result) {
    echo "<script>alert('Data Berhasil di SIMPAN'); window.location='index.php';</script>";
}
