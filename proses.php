<?php
session_start();
include "database.php";
$database = new database();
$db = new Database();

// login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db->login($username, $password);
} elseif (isset($_GET['logout'])) {
    $db->logout();
}

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_pelanggan($_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['no_hp'],$_POST['email']);
     header('location:service-add.php');
    // include "all"
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_pelanggan($_GET['Id_pelanggan']);
   header('location:pelanggan-data.php');
}elseif($aksi == "update"){
    $database->Update_data_pelanggan($_POST['id_pelanggan'],$_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['no_hp'],$_POST['email']);
    header('location:pelanggan-data.php');
    
// start proses service masuk
}elseif($aksi == "tambahtservis"){
    $database->Input_data_service($_POST['id_pelanggan'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:reservasi-add.php');
}elseif($aksi == "hapusservis"){
    $database->Hapus_data_service($_GET['id_service']);
    header('location:service-data.php');
}elseif($aksi == "updateservis"){
    $database->Update_data_service($_POST['id_service'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:service-data.php');

    // proses update servis 
}elseif($aksi == "tambahreservasi"){
    $database->Input_data_reservasi($_POST['id_pelanggan'],$_POST['id_service'],$_POST['id_teknisi'],$_POST['status_proses']);
    header('location:transaksi-add.php');
}elseif($aksi == "updatereservasi"){
    $database->Update_data_reservasi($_POST['id_reservasi'],$_POST['id_teknisi'],$_POST['status_proses']);
    header('location:reservasi-data.php');



}elseif($aksi == "tambahtransaksi"){
    $database->Input_Data_transaksi($_POST['id_pelanggan'],$_POST['id_service'],$_POST['id_reservasi'],$_POST['total_biaya'], $_POST['tanggal_transaksi']);
    header('location:transaksi-data.php');
}elseif($aksi == "updatetransaksi"){
    $database->Update_Data_transaksi($_POST['id_transaksi'],$_POST['total_biaya'], $_POST['tanggal_transaksi']);
    header('location:transaksi-data.php');
 


    
    // start proses teknisi
}elseif($aksi == "tambahteknisi"){
    $database->Input_data_teknisi($_POST['nama_teknisi'],$_POST['Jenis_kelamin'],$_POST['alamat'],$_POST['spesialis'],$_POST['no_hp']);    
    header('location:teknisi-data.php');
}elseif($aksi == "hapusteknisi"){
    $database->Hapus_data_teknisi($_GET['id_teknisi']);
    header('location:teknisi-data.php');
}elseif($aksi == "updateteknisi"){
    $database->Update_data_teknisi($_POST['id_teknisi'],$_POST['nama_teknisi'],$_POST['Jenis_kelamin'],$_POST['alamat'],$_POST['spesialis'],$_POST['no_hp']);
    header('location:teknisi-data.php');
}elseif($aksi == "cari"){
    $database->cari($_POST['nama']);
    header('location:teknisi-data.php');

}
// elseif($aksi == "tambah_data_pelanggan_service"){
//     $database->Input_data_pelanggan_service($_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_hp'], $_POST['email'],
//     $_POST['id_pelanggan'],$_POST['nama_perangkat'], $_POST['model'], $_POST['tanggal_masuk'], $_POST['deskripsi']);
//     header('location:index-admin.php');

// }

?>