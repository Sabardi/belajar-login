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

	// class login dan log out start 

	function login($username, $password) {
        $login = $this->koneksi->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        $cek = $login->num_rows;

        if ($cek > 0) {
            $data = $login->fetch_assoc();
			// admin
            if ($data['level'] == "admin") {
                $this->setSession($username, "admin");
                header("location:index-admin.php");
            } elseif ($data['level'] == "member") {
                $this->setSession($username, "member");
                header("location:index-member.php");
            // } elseif ($data['level'] == "resepsionis") {
            //     $this->setSession($username, "resepsionis");
            //     header("location:index-resepsionis.php");
            }elseif ($data['level'] == "pimpinan") {
                $this->setSession($username, "pimpinan");
                header("location:index-superadmin.php"); 
			}else {
                header("location:index.php?pesan=gagal");
            }
        } else {
            header("location:index.php?pesan=gagal");
        }
    }

	    // class edit data service  
		function loginsebagai($id){
			$data = mysqli_query($this->koneksi,"select * from user where id_service='$id'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

    function logout() {
        // session_start();
        session_destroy();
        header("location:index.php");
    }

    function setSession($username, $level) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
    }

    function register($username, $password, $email, $level) {
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, password, email, level) VALUES ('$username', '$password', '$email', '$level')";
        return $this->koneksi->query($query);
    }

	// login dan log out end
	

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

    //     // clas tampil layanan
	function Data_Pelanggan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_pelanggan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	    // clas tampil data layanan
		function Data_layanan()
		{
			$data = mysqli_query($this->koneksi,"select * from tb_layanan");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}
		function Tambah_layanan($Layanan){
			mysqli_query($this->koneksi,"insert into tb_layanan values ('','$Layanan')");
		}


		// class hapus data layanan
		function Hapus_layanan($id){
			mysqli_query($this->koneksi,"delete from tb_layanan where id_layanan='$id'");
		}

		// class update layananan
		function Edit_layanan($id){
			$data = mysqli_query($this->koneksi,"select from tb_layanan where id_layanan='$id");
			while($d = mysqli_fetch_array($data)){
				$hasil[]=$d;
			}
			return $hasil;
		}
		// class update layananan
		function Update_layanan(){
			
		}
}

?>

<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
