<?php
session_start();
include "database.php";

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namatoko = $_POST['nama_toko'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $deskripsi = $_POST['deskripsi'];
    $level = $_POST['level'];

    // Panggil metode register
    if ($db->register($username, $password, $namatoko, $email, $telepon, $deskripsi, $level)) {
        // echo "Registration successful. You can now login.";
        // header("location: index.php");
        header("location: index.php");
        exit();
    } else {
        echo "Registration failed.";
    }

}
?>