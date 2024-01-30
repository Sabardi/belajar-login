<?php
class database{
    var $host = "localhost";
	var $username = "root";
	var $password = "";
	// var $database = "mycomputerv2";
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
            // if ($data['level'] == "admin") {
            //     $this->setSession($username, "admin");
            //     header("location:index-admin.php");
            if ($data['level'] == "admin") {
                $this->setSession($username, "admin");
                header("location:index-admin.php");
            } elseif ($data['level'] == "member") {
                $this->setSession($username, "member");
                header("location:index-pelanggan.php");
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

    // clas tampil pelanggan start
	function Data_Pelanggan(){
		$data = mysqli_query($this->koneksi,"select * from tb_pelanggan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	// tampil data end
    // clas tampil pelanggan start

	// tampil data end

// tambah pelanggan start
	function Input_data_pelanggan($nama, $jenis_kelamin, $alamat, $no_tlpn, $email){
		mysqli_query($this->koneksi,"insert into tb_pelanggan values ('','$nama','$jenis_kelamin','$alamat','$no_tlpn','$email')");
	}
// tambah pelanggan end 

// hapus planggan start
	function Hapus_data_pelanggan($id){
		mysqli_query($this->koneksi,"delete from tb_pelanggan where Id_pelanggan ='$id'");
	}
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
function Update_data_pelanggan($id,$nama, $jeniskelamin, $alamat, $no_tlpn, $email){
	mysqli_query($this->koneksi,"update tb_pelanggan set nama='$nama', jenis_kelamin='$jeniskelamin', alamat='$alamat', no_hp='$no_tlpn', email='$email' where Id_pelanggan='$id'");
}
// proses update data pelanggan end


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
function Input_data_service($id_pelanggan, $nama_perangkat,$model,$tanggal_masuk,$deskripsi){
	mysqli_query($this->koneksi,"insert into tb_service values ('','$id_pelanggan','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')");
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

// data pelanggan service 
function pelanggan_service_data(){
	$data = mysqli_query($this->koneksi,"SELECT * FROM tb_service
	INNER JOIN tb_pelanggan ON tb_service.id_pelanggan = tb_pelanggan.id_pelanggan");
	while($row = mysqli_fetch_array($data)){
		$hasil[] = $row;
	}
	return $hasil;
}

// class edit data service  
function Edit_pelanggan_service($id){
	$data = mysqli_query($this->koneksi,"select * from tb_service where id_service='$id'");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
// proses update data pelanggan service
function Update_pelanggan_service($id,$nama_perangkat,$model,$tanggal_masuk,$deskripsi){
	mysqli_query($this->koneksi,"update tb_service set nama_perangkat='$nama_perangkat', model='$model', tanggal_masuk='$tanggal_masuk',deskripsi='$deskripsi' where id_service='$id'");
}



// reservasi 
// clas tampil data 
function Data_reservasi(){
	$data = mysqli_query($this->koneksi,"SELECT tb_reservasi.id_reservasi, tb_reservasi.status_proses, tb_pelanggan.nama, tb_service.nama_perangkat, 
	tb_service.model, tb_teknisi.no_hp, tb_teknisi.nama_teknisi
	FROM tb_reservasi
	INNER JOIN tb_pelanggan ON tb_reservasi.id_pelanggan = tb_pelanggan.id_pelanggan
	INNER JOIN tb_service ON tb_reservasi.id_service = tb_service.id_service
	INNER JOIN tb_teknisi ON tb_reservasi.id_teknisi = tb_teknisi.id_teknisi");
	while($row = mysqli_fetch_array($data)){
		$hasil[] = $row;
	}
	return $hasil;
}
// Clas input data service
function Input_data_reservasi($id_pl, $id_service,$id_teknisi,$status_proses){
	mysqli_query($this->koneksi,"insert into tb_reservasi values ('','$id_pl','$id_service','$id_teknisi','$status_proses')");
}
// proses hapus data servicw 
function Hapus_data_reservasi($id){
	mysqli_query($this->koneksi,"delete from tb_reservasi where id_reservasi='$id'");
}
// class edit data service  
function Edit_data_reservasi($id){
	$data = mysqli_query($this->koneksi,"SELECT * from tb_reservasi where id_reservasi='$id'");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
// proses update data service
function Update_data_reservasi($id_reservasi, $id_teknisi, $status_proses){
	mysqli_query($this->koneksi,"UPDATE tb_reservasi SET id_teknisi= '$id_teknisi', status_proses = '$status_proses' WHERE id_reservasi= '$id_reservasi'");
}


function Data_transaksi(){
	$data = mysqli_query($this->koneksi,"SELECT tb_trasaksi.id_transaksi, tb_trasaksi.total_biaya,tb_trasaksi.tanggal_transaksi, tb_pelanggan.nama, tb_service.nama_perangkat, tb_reservasi.status_proses
	FROM tb_trasaksi
	INNER JOIN tb_pelanggan ON tb_trasaksi.id_pelanggan = tb_pelanggan.id_pelanggan
	INNER JOIN tb_service ON tb_trasaksi.id_service = tb_service.id_service
	INNER JOIN tb_reservasi ON tb_trasaksi.id_reservasi = tb_reservasi.id_reservasi");
	while($row = mysqli_fetch_array($data)){
		$hasil[] = $row;
	}
	return $hasil;
}
// Clas input data service
function Input_Data_transaksi($id_pl, $id_service,$id_reservasi,$total_biaya, $tanggal_bayar){
	mysqli_query($this->koneksi,"insert into tb_trasaksi values ('','$id_pl','$id_service','$id_reservasi','$total_biaya', '$tanggal_bayar')");
}
// proses hapus data servicw 
function Hapus_Data_transaksi($id){
	mysqli_query($this->koneksi,"delete from tb_reservasi where id_reservasi='$id'");
}
// class edit data service  
function Edit_Data_transaksi($id){
	$data = mysqli_query($this->koneksi,"SELECT * from tb_trasaksi where id_transaksi='$id'");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
// proses update data service
function Update_Data_transaksi($id_tr, $total_biaya, $tanggal_bayar){
	mysqli_query($this->koneksi,"UPDATE tb_trasaksi SET total_biaya='$total_biaya', tanggal_transaksi='$tanggal_bayar' WHERE id_transaksi='$id_tr'");
}



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
	function Input_data_teknisi($nama,$Jenis_kelamin, $alamat,$spesialis, $no_tlpn){
		mysqli_query($this->koneksi,"insert into tb_teknisi values ('','$nama','$Jenis_kelamin','$alamat','$spesialis','$no_tlpn')");
	}
// tambah teknisi end 

// hapus teknisi  start
	function Hapus_data_teknisi($id){
		mysqli_query($this->koneksi,"delete from tb_teknisi where id_teknisi ='$id'");
	}

   function Edit_data_teknisi($id){
	   $data = mysqli_query($this->koneksi,"select * from tb_teknisi where id_teknisi ='$id'");
	   while($d = mysqli_fetch_array($data)){
		   $hasil[] = $d;
		}
		return $hasil;
	}
	// class edit data teknisi   end 

	// proses update data teknisi start
	function Update_data_teknisi($id,$nama, $Jenis_kelamin, $alamat,$spesialis, $no_tlpn){
		mysqli_query($this->koneksi,"update tb_teknisi set nama_teknisi='$nama', Jenis_kelamin='$Jenis_kelamin', alamat='$alamat',spesialis='$spesialis', no_hp='$no_tlpn' where id_teknisi='$id'");
	}
	// proses update data teknisi end

	// clas tampil data layanan
		function Data_perangkat(){
			$data = mysqli_query($this->koneksi,"select * from tb_perangkat");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}
		function Tambah_perangkat($nama_perangkat){
			mysqli_query($this->koneksi,"insert into tb_perangkat values ('','$nama_perangkat')");
		}


		// class hapus data layanan
		function Hapus_perangkat($id){
			mysqli_query($this->koneksi,"delete from tb_perangkat where id_layanan='$id'");
		}



		// tabel transaksi 
		function Data_transaksi1(){
			$data = mysqli_query($this->koneksi,
			"SELECT tb_trasaksi.id_transaksi,tb_pelanggan.nama,tb_pelanggan.alamat,tb_pelanggan.no_hp,
			tb_service.nama_perangkat,tb_service.model,tb_service.tanggal_masuk, tb_service.deskripsi,
			tb_teknisi.nama_teknisi,
			tb_trasaksi.status_transaksi,
			tb_trasaksi.di_proses_oleh,
			tb_trasaksi.total_biaya,
			tb_trasaksi.tanggal_transaksi
			FROM tb_trasaksi
			LEFT JOIN tb_pelanggan ON tb_trasaksi.id_transaksi=tb_pelanggan.Id_pelanggan
			LEFT JOIN tb_service ON tb_trasaksi.id_transaksi=tb_service.id_service
			LEFT JOIN tb_teknisi ON tb_trasaksi.id_transaksi=tb_teknisi.id_teknisi;");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
			// tampil teknisi end 
		}


		function Data_transaksi_sukses(){
			$data = mysqli_query($this->koneksi,"SELECT tb_trasaksi.id_transaksi, tb_trasaksi.total_biaya,tb_trasaksi.tanggal_transaksi, 
			tb_pelanggan.nama, tb_pelanggan.alamat, tb_pelanggan.no_hp, tb_service.nama_perangkat,
			tb_service.tanggal_masuk, tb_reservasi.status_proses
			FROM tb_trasaksi
			INNER JOIN tb_pelanggan ON tb_trasaksi.id_pelanggan = tb_pelanggan.id_pelanggan
			INNER JOIN tb_service ON tb_trasaksi.id_service = tb_service.id_service
			INNER JOIN tb_reservasi ON tb_trasaksi.id_reservasi = tb_reservasi.id_reservasi");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}
		function cari($nama){
			$data = mysqli_query($this->koneksi,"SELECT id_pelanggan, nama FROM tb_pelanggan
			WHERE nama LIKE '%$nama%'");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}
		// // tabel transaksi 
		// function Data_transaksi(){
		// 	$data = mysqli_query($this->koneksi,
		// 	"SELECT tb_trasaksi.id_transaksi,tb_pelanggan.Id_pelanggan as nama,tb_pelanggan.alamat,tb_pelanggan.no_hp,
		// 	tb_service.nama_perangkat,tb_service.model,tb_service.tanggal_masuk, tb_service.deskripsi,
		// 	tb_teknisi.nama_teknisi,
		// 	tb_trasaksi.status_transaksi,
		// 	tb_trasaksi.tanggal_transaksi 
		// 	FROM tb_trasaksi 
		// 	INNER JOIN tb_pelanggan ON tb_trasaksi.id_transaksi=tb_pelanggan.Id_pelanggan
		// 	INNER JOIN tb_service ON tb_trasaksi.id_transaksi=tb_service.id_service
		// 	INNER JOIN tb_teknisi ON tb_trasaksi.id_transaksi=tb_teknisi.id_teknisi;");
		// 	while($row = mysqli_fetch_array($data)){
		// 		$hasil[] = $row;
		// 	}
		// 	return $hasil;
		// 	// tampil teknisi end 
		// }


		// function Input_data_pelanggan_service($nama, $jenis_kelamin, $alamat, $no_hp, $email, $id_pl, $nama_perangkat, $model, $tanggal_masuk, $deskripsi){
		// 	mysqli_query($this->koneksi,"insert into tb_pelanggan values ('','$nama','$jenis_kelamin','$alamat','$no_hp','$email')");
		// 	$id = mysqli_insert_id($this->$id_pl);
		// 	mysqli_query($this->koneksi,"insert into tb_service values ('','$id','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')");
		// }

		// function input_id_reservasi($id1,$id2, $id_teknisi, $status_proses){
		// 	$id1 = mysqli_insert_id($this->koneksi);
		// 	mysqli_query($this->koneksi,"insert into tb_reservasi values ('','$id1','$id2', '$id_teknisi', '$status_proses')");
		// }


		function Data_Pelanggan_cari(){
			$data = mysqli_query($this->koneksi,"SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC LIMIT 1");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}

		function Data_service_cari(){
			$data = mysqli_query($this->koneksi,"SELECT * FROM tb_service ORDER BY id_service DESC LIMIT 1");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}

		function Data_reservasi_cari(){
			$data = mysqli_query($this->koneksi,"SELECT * FROM tb_reservasi ORDER BY id_reservasi DESC LIMIT 1");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			return $hasil;
		}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Servic Komputer</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

