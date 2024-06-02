<?php
// Include / load file koneksi.php
include "koneksi.php";


//





// Ambil data yang dikirim dari form
$vpntondano = $_POST['pntondano']; // Ambil data nis dan masukkan ke variabel nis
$vbiayapntondano = $_POST['biayapntondano']; // Ambil data nama dan masukkan ke variabel nama
$vpnluar = $_POST['pnluar']; // Ambil data telp dan masukkan ke variabel telp
$vbiayaluar = $_POST['biayaluar']; // Ambil data alamat dan masukkan ke variabel alamat

// Proses simpan ke Database
$query = "INSERT INTO hitung VALUES";

$index = 0; // Set index array awal dengan 0
foreach($vpntondano as $datapn){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$query .= "('".$datapn."','".$vbiayatondano[$index]."','".$vpnluar[$index]."','".$vbiayaluar[$index]."'),";
	$index++;
}

// Kita hilangkan tanda koma di akhir query
// sehingga kalau di echo $query nya akan sepert ini : (contoh ada 2 data siswa)
// INSERT INTO siswa VALUES('1011001','Rizaldi','Laki-laki','089288277372','Bandung'),('1011002','Siska','Perempuan','085266255121','Jakarta');
$query = substr($query, 0, strlen($query) - 1).";";

// Eksekusi $query
mysqli_query($koneksi, $query);

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
echo "<script>alert('Data berhasil disimpan');window.location = 'form.php';</script>";
?>

