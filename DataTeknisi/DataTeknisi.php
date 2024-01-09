<?php
include "../database.php";
$database = new Database();
$data_service = $database->Data_teknisi();
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
        <h1>DATA TEKNISI</h1>

        <a href="AddData.php">Tambah data teknisi</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>spesialis</th>
                <th>no telpon</th>
                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama_teknisi']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['spesialis']?></td>
                <td><?= $data['no_hp']?></td>
                <td>
                    <a href="edit.php?id_teknisi=<?= $data['id_teknisi']; ?>&aksi=edit">Edit</a>
                    <a href="proses.php?id_teknisi=<?= $data['id_teknisi']; ?>&aksi=hapus"
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