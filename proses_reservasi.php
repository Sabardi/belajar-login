<?php 
include 'database.php';
$db = new Database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $db->inputReservasi($_POST["id_pelanggan"],$_POST["keluhan"],$_POST["id_teknisi"],$_POST["status"],$_POST["tanggal"]);
    header("location:reservasi.php");

}elseif($aksi == "hapus"){ 	
    $db->hapusReservasi($_GET['id']);
   header("location:reservasi.php");

}elseif($aksi == "update"){
    $db->updateReservasi($_POST['id'],$_POST["id_pelanggan"],$_POST["keluhan"],$_POST["id_teknisi"],$_POST["status"],$_POST["tanggal"]);
    header("location:reservasi.php");

}elseif($aksi == "tambahpelanggan"){
        $db->inputPelanggan($_POST["nama_pelanggan"],$_POST["jk"],$_POST["hp"],$_POST["email"],$_POST["alamat"]);
        header("location:data_pelanggan.php");

}elseif($aksi == "updatePelanggan"){
    $db->updatePelanggan($_POST['id'],$_POST["nama_pelanggan"],$_POST["jk"],$_POST["hp"],$_POST["email"],$_POST["alamat"]);
    header("location:data_pelanggan.php");

}elseif($aksi == "hapusLaporan"){ 	
    $db->hapusLaporan($_GET['id']);
   header("location:laporan.php");

}elseif($aksi == "hapusPelanggan"){ 	
    $db->hapusPelanggan($_GET['id']);
   header("location:data_pelanggan.php");
}
?>


