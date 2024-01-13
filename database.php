<?php
class database{

    var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "mycomputerv1";
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
	// Data_teknisi

    // clas tampil pelanggan start
	function Data_Pelanggan(){
		$data = mysqli_query($this->koneksi,"select * from tb_pelanggan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	// tampil data end

// tambah pelanggan start
	function Input_data_pelanggan($nama, $alamat, $no_tlpn){
		mysqli_query($this->koneksi,"insert into tb_pelanggan values ('','$nama','$alamat','$no_tlpn')");
	}
// tambah pelanggan end 

// hapus planggan start
	function Hapus_data_pelanggan($id){
		mysqli_query($this->koneksi,"delete from tb_pelanggan where Id_pelanggan ='$id'");
	}
// hapus planggan start

   // class edit data pelanggan  
   function Edit_data_pelanggan($id){
	   $data = mysqli_query($this->koneksi,"select * from tb_pelanggan where Id_pelanggan ='$id'");
	   while($d = mysqli_fetch_array($data)){
		   $hasil[] = $d;
		}
		return $hasil;
	}
	// class edit data pelanggan  end 

// proses update data pelanggan start
function Update_data_pelanggan($id,$nama, $alamat, $no_tlpn){
	mysqli_query($this->koneksi,"update tb_pelanggan set nama='$nama', alamat='$alamat', no_hp='$no_tlpn' where Id_pelanggan='$id'");
}
// proses update data pelanggan end

	// clas tampil teknisi start
	function Data_teknisi(){
		$data = mysqli_query($this->koneksi,"select * from tb_teknisi");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
		// tampil teknisi end 
	}
// tambah teknisi start
	function Input_data_teknisi($nama, $alamat,$spesialis, $no_tlpn){
		mysqli_query($this->koneksi,"insert into tb_teknisi values ('','$nama','$alamat','$spesialis','$no_tlpn')");
	}
// tambah teknisi end 

// hapus teknisi  start
	function Hapus_data_teknisi($id){
		mysqli_query($this->koneksi,"delete from tb_teknisi where id_teknisi ='$id'");
	}

// hapus teknisi  end

   // class edit data teknisi   
   function Edit_data_teknisi($id){
	   $data = mysqli_query($this->koneksi,"select * from tb_teknisi where id_teknisi ='$id'");
	   while($d = mysqli_fetch_array($data)){
		   $hasil[] = $d;
		}
		return $hasil;
	}
	// class edit data teknisi   end 

	// proses update data teknisi start
	function Update_data_teknisi($id,$nama, $alamat,$spesialis, $no_tlpn){
		mysqli_query($this->koneksi,"update tb_teknisi set nama_teknisi='$nama', alamat='$alamat',spesialis='$spesialis', no_hp='$no_tlpn' where id_teknisi='$id'");
	}
	// proses update data teknisi end
	    
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

		// tabel transaksi 
		function Data_transaksi(){
			$data = mysqli_query($this->koneksi,
			"SELECT tb_trasaksi.id_transaksi,tb_pelanggan.nama,
			tb_service.id_service,
			tb_teknisi.id_teknisi,
			tb_trasaksi.status_transaksi,
			tb_trasaksi.tanggal_transaksi 
			FROM tb_trasaksi 
			INNER JOIN tb_pelanggan ON tb_trasaksi.id_transaksi=tb_pelanggan.Id_pelanggan
			INNER JOIN tb_service ON tb_trasaksi.id_transaksi=tb_service.id_service 
			INNER JOIN tb_teknisi ON tb_trasaksi.id_transaksi=tb_teknisi.id_teknisi;");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
			// tampil teknisi end 
		}

}

?>

<!-- <link rel="stylesheet" href="./asset/css/bootstrap.min.css"> -->
<link rel="icon" href="asset/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="asset/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="asset/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="asset/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="asset/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="asset/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="asset/js/semantic.min.css" />




	        <!-- jQuery -->
	<script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="asset/js/animate.js"></script>
      <!-- select country -->
      <script src="asset/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="asset/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="asset/js/custom.js"></script>
      <!-- owl carousel -->
      <script src="asset/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="asset/js/Chart.min.js"></script>
      <script src="asset/js/Chart.bundle.min.js"></script>
      <script src="asset/js/utils.js"></script>
      <script src="asset/js/analyser.js"></script>
      <script src="asset/js/chart_custom_style1.js"></script>