<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:indexadm.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Selamat datang : <?php echo $_SESSION['nama']; ?></h1>
	<br>
	<h2>List Kontak</h2>
	<table border="1">
		<tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th>
		<th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php
	//menghubungkan dengan file lain
	include 'connect.php';
	//mengirim query pada database
	$kontak = mysqli_query($koneksi,"SELECT * from kontak");
	$no=1;
	//menampilkan data
	foreach($kontak as $row){
	    $jen_kel = $row['jen_kel']=='P'?'Perempuan':'Laki-laki';
	    echo "<tr>
	    <td>$no</td>
	    <td>".$row['id_kontak']."</td>
	    <td>".$row['nama']."</td>
	    <td>".$jen_kel."</td>
	    <td>".$row['email']."</td>
	    <td>".$row['alamat']."</td>
	    <td>".$row['kota']."</td>
	    <td>".$row['pesan']."</td>
	    </tr>";
	    $no++;
	}
	?>
	</table>

	<br>
	<a href="logout.php">Klik disini untuk logout.</a>
</body>
</html>