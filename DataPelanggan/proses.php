<?php
include "../database.php";
$database = new database();
$aksi = $_GET['aksi'];

if ($aksi == "tambah") {

    $database->tambah_pelanggan($_POST['nama'],$_POST['alamat'],$_POST['no_hp']);
    header('location:DataPelanggan.php');
}
?>