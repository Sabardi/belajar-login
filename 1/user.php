<?php
include "database.php";

class User extends Database{
    function __construct(){
        parent::__construct();
    }
    
    function cek_login($username, $password){
        $sql = "SELCET * FROM tb_users WHERE username = '$username' AND password = '$password'";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_array();
            return $row['id_user'];
        }
    }
}
?>