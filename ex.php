
<?php

// proses

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $db->inputReservasi($_POST["id_pelanggan"],$_POST["keluhan"],$_POST["id_teknisi"],$_POST["status"],$_POST["tanggal"]);
    header("location:reservasi.php");


    // database

    function inputReservasi( $id, $pelanggan, $keluhan,$teknisi, $status, $tanggal){
		// mysqli_query($this->conn,"insert into reservasi values ('',$nama_pelanggan, $keluhan, $status, $tanggal)");
        $query = "INSERT INTO reservasi VALUES ('','$pelanggan', '$keluhan','$teknisi', '$status','$tanggal')";
        return $this->conn->query($query);
	}






