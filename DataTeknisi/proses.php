<?php
include "../database.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_teknisi($_POST['nama'],$_POST['alamat'],$_POST['spesialis'],$_POST['no_hp']);
    header('location:DataTeknisi.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_teknisi($_GET['id_teknisi']);
   header('location:DataTeknisi.php');
}elseif($aksi == "update"){
    $database->Update_data_teknisi($_POST['id_teknisi'],$_POST['nama'],$_POST['alamat'],$_POST['spesialis'],$_POST['no_hp']);
    header('location:DataTeknisi.php');
}
?>