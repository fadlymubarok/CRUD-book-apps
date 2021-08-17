<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM data_buku where id = '$id'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);

    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan di Tabel.'); window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Data tidak ada'); window.location='index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Arial;
            box-sizing: border-box;
        }

        h1 {
            margin: 20px;
            text-align: center;
        }

        .input_section {
            width: 400px;
            padding: 20px;
            margin: 0 auto;
            background-color: #ededed;
            border-radius: 7px;

        }

        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }

        input {
            padding: 6px;
            width: 100%;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
        }

        button {
            margin-top: 10px;
            margin-right: 10px;
            width: 100px;
            padding: 5px;
            border: none;
        }

        .submit {
            background-color: rgb(252, 252, 41);
            color: #fff;
            border-radius: 5px;
        }

        .back {
            background-color: red;
            border-radius: 5px;
        }

        .back a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="judul">
            <h1>Ubah Buku <?= $data['judul']; ?></h1>
        </div>
        <section class="input_section">
            <form action="proses_ubah.php" method="POST">
                <div>
                    <label>Kode Buku</label>
                    <input type="text" name="kd_buku" value="<?= $data['kd_buku']; ?>" required>
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                </div>
                <div>
                    <label>Judul</label>
                    <input type="text" name="judul" value="<?= $data['judul']; ?>" required>
                </div>
                <div>
                    <label>Penulis</label>
                    <input type="text" name="penulis" value="<?= $data['penulis']; ?>" required>
                </div>
                <div>
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" value="<?= $data['penerbit']; ?>" required>
                </div>
                <div>
                    <label>Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" value="<?= $data['tahun_terbit']; ?>">
                </div>
                <button type="submit" class="submit">UBAH</button>
                <button class="back">
                    <a href="index.php">KEMBALI</a>
                </button>
            </form>
        </section>
    </div>
</body>

</html>