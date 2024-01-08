<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Silahkan tambah layanan anda</h1>
        <form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <td><span>Nama Layana</span></td>
                    <td>:</td>
                    <td>
                        <input type="text"name="nama_layanan" id="nama_layanan">
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
            <td>
            
            </td>
            
        </form>
    </center>
</body>
</html>