<?php
include "../database.php";
$database = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $database->tambah_layanan($_POST['nama_layanan']);
    header('location:DataLayanan.php');
}

?>