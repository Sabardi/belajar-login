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

	// $sql = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.nama_pelanggan, tb_service.nama_perangkat, tb_teknisi.nama_teknisi, tb_transaksi.status_transaksi, tb_transaksi.tanggal_transaksi
	// FROM tb_transaksi 
	// INNER JOIN tb_pelanggan ON tb_transaksi.id_pelanggan = tb_pelanggan.id_pelanggan
	// INNER JOIN tb_service ON tb_transaksi.id_service = tb_service.id_service
	// INNER JOIN tb_teknisi ON tb_transaksi.id_teknisi = tb_teknisi.id_teknisi";

	// $sql = "SELECT transaksi.id_transaksi, barang.nama_barang, transaksi.jumlah_barang, transaksi.total_harga 
    //     FROM transaksi 
    //     INNER JOIN barang ON transaksi.id_barang = barang.id_barang";

// clas tampil transaksi start
// function Data_transaksi(){
// 	$data = mysqli_query($this->koneksi,
//     "SELECT * fromtb_trasaksi.id_transaksi,
//     tb_pelanggan.Id_pelanggan,
//     tb_service.id_service,
//     tb_teknisi.id_teknisi,
//     tb_trasaksi.status_transaksi,
//     tb_trasaksi.tanggal_transaksi 
//     FROM tb_trasaksi 
//     INNER JOIN tb_pelanggan ON tb_trasaksi.id_transaksi=tb_pelanggan.Id_pelanggan
//     INNER JOIN tb_service ON tb_trasaksi.id_transaksi=tb_service.id_service 
//     INNER JOIN tb_teknisi ON tb_trasaksi.id_transaksi=tb_teknisi.id_teknisi;");
// 	while($row = $data->fetch_assoc()){
// 		$hasil[] = $row;
// 	}
// 	return $hasil;
// 	// tampil transaksi end 
// }

// function Data_transaksi(){
// 	$data = mysqli_query($this->koneksi,"SELECT * from tb_trasaksi,tb_pelanggan where tb_trasaksi.id_pelanggan=tb_pelanggan.Id_pelanggan");
//     // tb_pelanggan.Id_pelanggan, 
//     // FROM tb_trasaksi 
//     // INNER JOIN tb_pelanggan ON tb_trasaksi.id_transaksi=tb_pelanggan.Id_pelanggan
//     // INNER JOIN tb_service ON tb_trasaksi.id_transaksi=tb_service.id_service 
//     // INNER JOIN tb_teknisi ON tb_trasaksi.id_transaksi=tb_teknisi.id_teknisi;");
// 	while($row = $data->fetch_assoc()){
// 		$hasil[] = $row;
// 	}
// 	return $hasil;
// 	// tampil transaksi end 
// }
// function Data_transaksi(){
// 	$data = mysqli_query($this->koneksi,"select from tb_pelanggan,tb_service,	tb_teknisi,tb_transakaksi_service");
// 	while($row = mysqli_fetch_array($data)){
// 		$hasil[] = $row;
// 	}
// 	return $hasil;
// 	// tampil teknisi end 
// }
// tambah teknisi start
function Input_data_transaksi($nama, $alamat,$spesialis, $no_tlpn){
	mysqli_query($this->koneksi,"insert into tb_teknisi values ('','$nama','$alamat','$spesialis','$no_tlpn')");
}
// tambah teknisi end 

// hapus teknisi  start
function Hapus_data_transaksi($id){
	mysqli_query($this->koneksi,"delete from tb_teknisi where id_teknisi ='$id'");
}

// hapus teknisi  end

// class edit data teknisi   
function Edit_data_transaksi($id){
   $data = mysqli_query($this->koneksi,"select * from tb_teknisi where id_teknisi ='$id'");
   while($d = mysqli_fetch_array($data)){
	   $hasil[] = $d;
	}
	return $hasil;
}
// class edit data teknisi   end 

// proses update data teknisi start
function Update_data_transaksi($id,$nama, $alamat,$spesialis, $no_tlpn){
	mysqli_query($this->koneksi,"update tb_teknisi set nama='$nama', alamat='$alamat',spesialis='$spesialis', no_hp='$no_tlpn' where id_teknisi='$id'");
}
// proses update data teknisi end

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