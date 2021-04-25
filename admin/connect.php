<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password  = "";
$database = "latihan";
//perintah php untuk akses ke database
$koneksi = mysqli_connect ($host,$user,$password,$database);

if(!$koneksi) { //jika koneksi gagal
    die("Koneksi gagal : ".mysql_connect_error());
}
?>