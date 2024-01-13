<?php
include "../database1.php";
$database = new Database();
$data_service = $database->Data_transaksi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>DATA TRANSAKSI</h1>

        <!-- <a href="AddData.php">Tambah data transaksi</a> -->
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>no telpon</th>
                <th>nama perangkat</th>
                <th>model</th>
                <th>tanggal masuk</th>
                <th>deskripsi</th>
                <th>nama teknisi</th>
                <th>status pembayaran</th>
                <th>total biaya</th>
                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['no_hp']?></td>
                <td><?= $data['nama_perangkat']?></td>
                <td><?= $data['model']?></td>
                <td><?= $data['tanggal_masuk']?></td>
                <td><?= $data['deskripsi']?></td>
                <td><?= $data['nama_teknisi']?></td>
                <td><?= $data['spesialis']?></td>
                <td><?= $data['status_pembaya']?></td>
                <td><?= $data['total_biaya']?></td>
                <td><?= $data['di_proses_oleh']?></td>
                <td>
                    <a href="edit.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=edit">Edit</a>
                    <a href="proses.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=hapus"
                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>

        <br>
        <button><a href="../index-admin.php">ke dashboard</a></button>
    </center>
    
</body>
</html>