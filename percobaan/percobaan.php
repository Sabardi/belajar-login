<?php
include "../percobaan.php";
$database = new database();
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
                <th>id transakfa-spin</th> 
                <th>Id pelanggan</th>
                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $data['id_transaksi']?></td>
                <td><?= $data['Id_pelanggan']?></td>

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