<?php
include 'connect.php';
//menyimpan data ke dalam variabel
$id_kontak    =$_POST['id_kontak'];
$nama         =$_POST['nama'];
$jen_kel      =$_POST['jen_kel'];
$email        =$_POST['email'];
$alamat       =$_POST['alamat'];
$kota         =$_POST['kota'];
$pesan        =$_POST['pesan'];
//query sql untuk insert data
$query="INSERT INTO kontak SET id_kontak='$id_kontak', 
nama='$nama', jen_kel='$jen_kel', email='$email', 
alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header ("location:index.php");
?>