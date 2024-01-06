<?php
include "../database.php";
$database = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $database->tambah_service($_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
//    dd("Data Service Berhasil");
    header('location:DataService.php');
    
}elseif($aksi == "update"){
    $db->update_service($_POST['id_service'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header("location:index.php");
}

?>