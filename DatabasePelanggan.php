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
	function Data_pelanggan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_pelanggan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
    // Clas input data service
	function Input_data_pelanggan($nama,$alamat,$no_telpon){
		mysqli_query($this->koneksi,"insert into tb_pelanggan values ('','$nama','$alamat','$no_telpon')");
	}
    // proses hapus data servicw 
	function Hapus_data_pelanggan($id){
		mysqli_query($this->koneksi,"delete from tb_service where tb_pelanggan='$id'");
	}
    // class edit data service  
	function Edit_data_pelanggan($id){
		$data = mysqli_query($this->koneksi,"select * from tb_pelanggan where Id_pelanggan='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
    // proses update data service
	function Update_data_pelanggan($id,$nama,$alamat,$no_telpon){
		mysqli_query($this->koneksi,"update tb_service set nama='$nama', alamat='$alamat', no_hp='$no_telpon' where id_service='$id'");
	}

}

?>

<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
