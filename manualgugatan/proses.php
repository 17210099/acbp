<?php
// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
 // Ambil data nis dan masukkan ke variabel nis
$nama = $_POST['wilayah']; // Ambil data nama dan masukkan ke variabel nama
$telp = $_POST['luar']; // Ambil data telp dan masukkan ke variabel telp
$pnbp = $_POST['pnbp']; // Ambil data telp dan masukkan ke variabel telp
// Proses simpan ke Database
$query = "INSERT INTO hitunglokasi VALUES";

$index = 0; // Set index array awal dengan 0
foreach($nama as $dataid){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$query .= "('".$dataid."','".$telp[$index]."','".$pnbp[$index]."'),";
	$index++;
}

// Kita hilangkan tanda koma di akhir query
// sehingga kalau di echo $query nya akan sepert ini : (contoh ada 2 data siswa)
// INSERT INTO siswa VALUES('1011001','Rizaldi','Laki-laki','089288277372','Bandung'),('1011002','Siska','Perempuan','085266255121','Jakarta');
$query = substr($query, 0, strlen($query) - 1).";";

// Eksekusi $query
mysqli_query($connect, $query);

// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
echo "<script>window.location = 'form.php';</script>";
?>

