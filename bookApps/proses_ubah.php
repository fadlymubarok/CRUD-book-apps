<?php

include('config.php');

$id = $_POST['id'];
$kd_buku = $_POST['kd_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

$query = "UPDATE data_buku SET kd_buku = '$kd_buku', judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit'";

$query .= "WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data Berhasil di UBAH'); window.location='index.php';</script>";
}
