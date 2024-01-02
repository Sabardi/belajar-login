<?php
include "../database.php";
$database = new Database();
$data_service = $database->data_service();
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
        <h1>DATA SERVICE</h1>

        <a href="AddData.php">[+] Add layanan</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Perangkat</th>
                <th>model</th>
                <th>Tanggal masuk</th>
                <th>Deskripsi</th>
                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){
            ?>
            <tr> 
                <td><?= $no++?></td>
                <td><?= $data['nama_perangkat']?></td>
                <td><?= $data['model']?></td>
                <td><?= $data['tanggal_masuk']?></td>
                <td><?= $data['deskripsi']?></td>
                <td>
                    <button><a href="edit.php?id=<?= $data['id_service'];?>">edit</a></button>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>

    <button><a href="../index.php">kembali ke dashbord</a></button>
    
</body>
</html>