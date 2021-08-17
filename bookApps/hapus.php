<?php
include('config.php');

$id = $_GET['id'];
$query = "DELETE FROM data_buku where id = '$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query Error " . mysqli_errno($conn) . " - " . mysqli_error($conn));
} else {
    echo "<script>alert('Data Berhasil di HAPUS'); window.location='index.php';</script>";
}
