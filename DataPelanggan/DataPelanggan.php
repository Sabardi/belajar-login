<?php
include "../database.php";
$database = new Database();
$data_service = $database->Data_Pelanggan();
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
        <h1>DATA PELANGGAN</h1>

        <a href="AddData.php">Tambah data pelanggan</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>no telpon</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['tanggal_masuk']?></td>
            </tr>
            <?php
            }
            ?>
        </table>

        <br>
        <button><a href="../index.php">ke dashboard</a></button>
    </center>
    
</body>
</html>