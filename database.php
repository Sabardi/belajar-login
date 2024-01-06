<?php
class database{

    var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "mycomputer";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

    // clas tampil data service
	function Data_service()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_service");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
    // Clas input data service
	function Input_data_service($nama_perangkat,$model,$tanggal_masuk,$deskripsi){
		mysqli_query($this->koneksi,"insert into tb_service values ('','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')");
	}
    // proses hapus data servicw 
	function Hapus_data_service($id){
		mysqli_query($this->koneksi,"delete from tb_service where id_service='$id'");
	}
    // class edit data service  
	function Edit_data_service($id){
		$data = mysqli_query($this->koneksi,"select * from tb_service where id_service='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
    // proses update data service
	function Update_data_service($id,$nama_perangkat,$model,$tanggal_masuk,$deskripsi){
		mysqli_query($this->koneksi,"update tb_service set nama_perangkat='$nama_perangkat', model='$model', tanggal_masuk='$tanggal_masuk',deskripsi='$deskripsi' where id_service='$id'");
	}
}

?>

<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
