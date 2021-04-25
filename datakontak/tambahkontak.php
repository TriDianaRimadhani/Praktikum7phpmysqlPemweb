<!DOCTYPE html>
<html>
<head><title>Form Input Data Kontak</title>
</head>
<body>
    <!--membuat method untuk mengirim form ke file lain-->
    <form method="post" action="savedata.php">
    <table>
    <!--tampilan form-->
    <tr><td>ID</td><td><input type="text" onkeyup="isi_otomatis()" name="id_kontak"></td></tr>
    <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
    <tr><td>JENIS KELAMIN</td><td> 
            <!--inputan media tipe radio button-->
            <input type="radio" name="jen_kel" value="L">Laki-laki
            <input type="radio" name="jen_kel" value="P">Perempuan
        </td></tr>
    <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
    <tr><td>ALAMAT</td><td><textarea name="alamat"></textarea></td></tr>
    <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
    <tr><td>PESAN</td><td><textarea name="pesan"></textarea></td></tr>
    <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>    
    </table>
    </form>
</body>
</html>
