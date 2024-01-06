<?php
include "../database.php";
$database = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($database->edit_service($_GET['id']) as $data){
    ?>
    <center>
        <form action="proses.php?aksi=update" method="post">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="hidden" name="id_service" id="id_service" value="<?= $data['id_service'];?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="nama_perangkat">Nama perangkat</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_perangkat" id="nama_perangkat" value="<?= $data['nama_perangkat']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="model">Model</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="model" id="model" value="<?= $data['model'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="tanggal_masuk">Tanggal_masuk</label></td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="<?= $data['tanggal_masuk'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><span>Deskripsi</span></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="deskripsi" id="deskripsi" value="<?= $data['deskripsi'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">simpan</button>
                        <button><a href="DataService.php">Batal</a></button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    }
    ?>
</body>
</html>