<?php

class Database{
    var $conn;

    function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "pbo");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function login($username, $password) {
        $login = $this->conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        $cek = $login->num_rows;

        if ($cek > 0) {
            $data = $login->fetch_assoc();

            if ($data['level'] == "admin") {
                $this->setSession($username, "admin");
                // header("location:free.php");
                header("location:index-admin.php");
            } elseif ($data['level'] == "superadmin") {
                $this->setSession($username, "superadmin");
                header("location:index-superadmin.php");
            } else {
                header("location:index.php?pesan=gagal");
            }
        } else {
            header("location:index.php?pesan=gagal");
        }
    }

    function setSession($username, $level) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
    }

    function register($username, $password, $namatoko, $email, $telepon, $deskripsi, $level ) {
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, password, nama_toko, email, telepon, deskripsi, level) VALUES ('$username', '$password', '$namatoko', '$email', '$telepon', '$deskripsi', '$level')";
        return $this->conn->query($query);
    }

    function tampilReservasi() {
        $data =mysqli_query($this->conn, "SELECT * FROM reservasi");
        while($dat=mysqli_fetch_array($data)) {
            $hasil [] = $dat;
        }
        return $hasil;
    }


    function inputReservasi( $id_pelanggan, $keluhan,$id_teknisi ,$status, $tanggal){
		// mysqli_query($this->conn,"insert into reservasi values ('',$nama_pelanggan, $keluhan, $status, $tanggal)");
        $query = "INSERT INTO reservasi (id_pelanggan, keluhan,id_teknisi, status, tanggal) VALUES ('$id_pelanggan', '$keluhan', '$id_teknisi', '$status','$tanggal')";
        return $this->conn->query($query);
	}

    public function editReservasi($id) {
        $data = mysqli_query($this->conn,"select * from reservasi where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
    }

    function updateReservasi($id, $id_pelanggan, $keluhan,$id_teknisi ,$status, $tanggal){
		mysqli_query($this->conn, "UPDATE reservasi SET id_pelanggan='$id_pelanggan', keluhan='$keluhan', id_teknisi='$id_teknisi', status='$status', tanggal='$tanggal' WHERE id='$id'");
	}

    function hapusReservasi($id){
		mysqli_query($this->conn,"delete from reservasi where id='$id'");
	}

    function tampilLaporan() {
        $data =mysqli_query($this->conn, "SELECT * FROM laporan");
        while($dat=mysqli_fetch_array($data)) {
            $hasil [] = $dat;
        }
        return $hasil;
    }

    function hapusLaporan($id){
		mysqli_query($this->conn,"delete from laporan where id='$id'");
	}

    // INI DATA PELANGGAN

    function inputPelanggan( $nama_pelanggan, $jk, $hp, $email, $alamat){
		// mysqli_query($this->conn,"insert into reservasi values ('',$nama_pelanggan, $keluhan, $status, $tanggal)");
        $query = "INSERT INTO pelanggan (nama_pelanggan, jk, hp, email, alamat) VALUES ('$nama_pelanggan', '$jk', '$hp','$email', '$alamat')";
        return $this->conn->query($query);
	}

    function tampilPelanggan() {
        $data =mysqli_query($this->conn, "SELECT * FROM pelanggan");
        while($dat=mysqli_fetch_array($data)) {
            $hasil [] = $dat;
        }
        return $hasil;
    }

    function editPelanggan($id) {
        $data = mysqli_query($this->conn,"select * from pelanggan where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
    }

    function updatePelanggan($id, $nama_pelanggan, $jk, $hp, $email, $alamat){
		mysqli_query($this->conn, "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', jk='$jk', hp='$hp', email='$email', alamat='$alamat' WHERE id='$id'");
	}

    function hapusPelanggan($id){
		mysqli_query($this->conn,"delete from pelanggan where id='$id'");
	}

    function tampilToko() {
        $data =mysqli_query($this->conn, "SELECT * FROM profil_toko");
        while($dat=mysqli_fetch_array($data)) {
            $hasil [] = $dat;
        }
        return $hasil;
    }

    // teknisi

    function tampilTeknisi() {
        $data =mysqli_query($this->conn, "SELECT * FROM tb_teknisi");
        while($dat=mysqli_fetch_array($data)) {
            $hasil [] = $dat;
        }
        return $hasil;
    }


    // LOGOUT 

    function logout() {
        session_start();
        session_destroy();
        header("location:index.php");
    }

   

}


























?>