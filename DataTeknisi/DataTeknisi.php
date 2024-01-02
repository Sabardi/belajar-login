<?php
include "../database.php";
$database = new Database();
$data_service = $database->Data_Layanan();
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
        <h1>Layanan tersedia</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama layanan</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama_layanan']?></td>
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