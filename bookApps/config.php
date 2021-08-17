<?php

$conn = mysqli_connect('localhost', 'root', '', 'data_buku');

if (!$conn) {
    die('Tidak terkoneksi');
}
