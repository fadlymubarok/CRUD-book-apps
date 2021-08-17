<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Apps</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Arial;
            box-sizing: border-box;
        }

        .judul {
            background-color: rgb(14, 150, 32);
            color: white;
            padding: 10px;
        }

        .tambah {
            margin: 30px auto;
            width: 240px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background-color: rgb(70, 70, 255);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .tambah a {
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .tambah:hover {
            background-color: blue;
            box-shadow: 0 2px 4px rgb(110, 110, 110);
        }

        section {
            width: 90%;
            margin: 0 auto;
            box-shadow: 5px 5px 5px rgb(168, 168, 168);
        }

        table {
            border: 1px solid #dedede;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        table thead th {
            background-color: #7dff93;
            border: 1px solid #a2ffb1;
            color: #3d3d3d;
            padding: 10px;
            text-align: left;
        }

        table tbody td {
            border: 1px solid #ddeeee;
            color: #333;
            padding: 10px;
            text-align: left;
        }

        table tbody td a {
            color: #fff;
            padding: 10px 15px;
            font-size: 14px;
            text-decoration: none;
        }

        table tbody td .ubah {
            background-color: rgb(252, 252, 41);
        }

        table tbody td .hapus {
            background-color: red;
        }

        table tbody td .ubah:hover {
            background-color: rgb(219, 219, 38);
        }

        table tbody td .hapus:hover {
            background-color: rgb(187, 0, 0);
        }

        @media screen and (max-width: 800px) {

            .tambah {
                width: 150px;
            }

            .tambah a {
                font-size: 13px;
            }

            table,
            .ubah,
            .hapus {
                font-size: 9px;
            }

            table tbody td a {
                padding: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="judul">
            <center>
                <h1>Book Apps</h1>
            </center>
        </div>
        <div class="tambah">
            <a href="tambah.php">+ &nbsp;Tambahkan Buku</a>
        </div>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM data_buku ORDER BY id ASC");
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['kd_buku']; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['penulis']; ?></td>
                            <td><?= $row['penerbit'] ?></td>
                            <td><?= $row['tahun_terbit']; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row['id']; ?>" class="ubah">Ubah</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Anda yakin Ingin menghapus buku <?= $row['judul']; ?>')" class="hapus">Hapus</a>
                            </td>
                        </tr>

                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>