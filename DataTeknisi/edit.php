<?php
include '../database.php';
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
    <center>
        <h1>Edit data pelanggan</h1>
        <form action="proses.php?aksi=update" method="post">
            <?php
            foreach($database->Edit_data_teknisi($_GET['id_teknisi']) as $data){
            ?>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="text" name="id_teknisi" id="id_teknisi" value="<?php echo $data['id_teknisi']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_teknisi" id="nama_teknisi" value="<?php echo $data['nama_teknisi']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">alamat</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="spesialis">spesialis</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="spesialis" id="spesialis" value="<?php echo $data['spesialis']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="no_hp">No telpon</label></td>
                    <td>:</td>
                    <td>
                        <input type="number" name="no_hp" id="no_hp" value="<?php echo $data['no_hp']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">simpan</button>
                        <button><a href="DataTeknisi.php">batal</a></button>
                    </td>
                </tr>
            </table>
            <?php
            }
            ?>
        </form>
    </center>
</body>
</html>