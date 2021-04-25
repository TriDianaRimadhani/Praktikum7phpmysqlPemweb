<!DOCTYPE html>
<html>
<head><title>Form Input</title>
</head>
<body>
    <!--membuat method untuk mengirim form ke file lain-->
    <form method="post" action="simpan.php">
    <table>
    <!--tampilan form-->
    <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
    <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
    <tr><td>JENIS KELAMIN</td><td> 
            <!--inputan media tipe radio button-->
            <input type="radio" name="jenis_kelamin" value="L">Laki-laki
            <input type="radio" name="jenis_kelamin" value="P">Perempuan
        </td></tr>
    <tr><td>JURUSAN</td><td>
            <!--inputan media tipe dropdown-->
            <select name="jurusan">
            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
            </select>
        </td></tr>
        <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
        <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>    
    </table>
    </form>
</body>
</html>
