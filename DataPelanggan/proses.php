<?php
include "../DatabasePelanggan.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_service($_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:index_pelanggan.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_service($_GET['Id_pelanggan']);
   header('location:index_pelanggan.php');
}elseif($aksi == "update"){
    $database->Update_data_service($_POST['Id_pelanggan'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:index_pelanggan.php');

}
?>