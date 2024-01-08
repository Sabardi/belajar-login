<?php
include "../database.php";
$database = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $database->Tambah_layanan($_POST['nama_layanan']);
    header('location:DataLayanan.php');
}elseif($aksi=="hapus"){
    $database->Hapus_layanan($_GET['id_layanan']);
    header('location:DataLayanan.php');
}elseif($aksi=="update"){
    $database->Update_layanan();
}

?>