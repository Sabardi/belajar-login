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
    // public function __construct(){
 
    //     if (!isset($this->koneksi)) {
 
    //         $this->koneksi = new mysqli($this->host, $this->username, $this->pass, $this->database);
 
    //         if (!$this->koneksi) {
    //             echo 'Cannot connect to database server';
    //             exit;
    //         }            
    //     }    
 
    //     return $this->koneksi;
    // }

    // logika layanan
    function Data_Layanan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_layanan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
    
    // tambah layanan
    function tambah_layanan($nama_layanan){
        mysqli_query($this->koneksi, "insert into tb_layanan values('','$nama_layanan')");
    }

    // logika data service
    function Data_Service(){
        $data_service = mysqli_query($this->koneksi, "select * from tb_service");
        while($row = mysqli_fetch_array($data_service)){
            $hasil[]=$row;
        }
        return $hasil;
    }

    // tambah service
    function tambah_service($nama_perangkat, $model,$tanggal_masuk,$deskripsi) {
        mysqli_query($this->koneksi,"insert into tb_service values ('','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')");
    }
    function edit_service($id) {
        $data_service = mysqli_query($this->koneksi,"select * from tb_service where id_service='$id'");
        while($id = mysqli_fetch_array($data_service)){
            $hasil[]=$id;
        }
        return $hasil;
    }

    function update_service($id,$nama_perangkat, $model, $tanggal_masuk, $deskripsi) {
        $data_service= mysqli_query($this->koneksi,"update tb_service set nama_perangkat='$nama_perangkat',model='$model',tanggal_masuk='$tanggal_masuk', deskripsi='$deskripsi' where id_service='$id'");
    }
    // logika pelanggan
    function Data_Pelanggan(){
        $data_service = mysqli_query($this->koneksi, "select * from tb_pelanggan");
        while($row = mysqli_fetch_array($data_service)){
            $hasil[]=$row;
        }
        return $hasil;
    }

    function tambah_pelanggan($nama, $alamat, $nohp){
		mysqli_query($this->koneksi,"insert into tb_pelanggan values ('','$$nama', '$alamat', '$nohp')");
	}
    
    // logika data teknisi
    function Data_Teknisi(){
        $data_service = mysqli_query($this->koneksi, "select * from tb_teknisi");
        while($row = mysqli_fetch_array($data_service)){
            $hasil[]=$row;
        }
        return $hasil;
    }   

    // data transaksi
    function Data_Transaksi(){
        $data_service = mysqli_query($this->koneksi, "select * from tb_service");
        while($row = mysqli_fetch_array($data_service)){
            $hasil[]=$row;
        }
        return $hasil;
    }
}

?>