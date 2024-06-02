<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/menutengah.css">
	<link rel="stylesheet" href="assets/css/tombolcek.css">
	<link rel="stylesheet" href="assets/css/tambahcss.css">
	<link rel="stylesheet" href="assets/css/textmerah.css">


	<!-- =====BOX ICONS===== -->
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

	<title>Cek Panjar Biaya PN Tondano</title>
	<link href="img/favicon.png" rel="icon">
</head>

<body>
	<!--===== HEADER =====-->
	<header class="l-header">
		<nav class="nav bd-grid">
			<div>
				<a href="../contactus.php" class="nav__link active">HUBUNGI KAMI</a>
			</div>

			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">

					<li class="nav__item"><a href="../menuhalaman.php" class="nav__link active">AYO CEK BIAYA PERKARA</a></li>
					<li class="nav__item"><a href="../LAMPIRAN+BIAYA+PERKARA+BARU.php" class="nav__link active">SK BIAYA PERKARA PN TONDANO 2021</a></li>
					<li class="nav__item"><a href="https://www.pn-tondano.go.id" class="nav__link active">PN TONDANO</a></li>
					<li class="nav__item"><a href="../login/login.php" class="nav__link active">ADMIN</a></li>
				</ul>
			</div>

			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bx-menu'></i>
			</div>
		</nav>
	</header>
	<html>
	<br>
	<br>
	<br>

	<!--- ISI ---->
	<style>
		#customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td,
		#customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#customers tr:hover {
			background-color: #ddd;
		}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
		}


		input[type="number"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 1px solid #555;
			outline: none;
		}

		input[type="number"]:focus {
			background-color: lightblue;
		}

		#kuning {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#kuning td,
		#kuning th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#kuning tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#kuning tr:hover {
			background-color: #ddd;
		}

		#kuning th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #f5e93e;
			color: rgb(0, 0, 0);
		}
	</style>

	<head>
		<title>Hitung Manual</title>
		<script src="jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
		<h1>Hitung Delegasi</h1>
		<h4 class="redtext">BERHUBUNG PENDAFTARAN MELALUI APLIKASI E-COURT MAKA BIAYA PANGGILAN KEPADA "PENGGUGAT" HANYA MELALUI PANGGILAN EMAIL,
			MAKA TIDAK ADA BIAYA PANGGILAN UNTUK PENGGUGAT.<h4>
				<form method="post" action="proses.php">
					<!-- Buat tombol untuk menabah form data -->
					<br><br>
					<div class="control-group">
						<div class="card-body">
							<b>Pihak 1 :</b>
							<table>
								<tr>
									<td>LOKASI TERGUGAT</td>
									<td><input class="col-sm-2 control-label" type="text" name="wilayah[]" placeholder="MASUKAN LOKASI" required></td>
									<td></td>
								</tr>
							</table>
							<p class="redtext">LOKASI/ALAMAT TERGUGAT (DESA ATAU KELURAHAN/KECAMATAN) SESUAI SK BIAYA PENGADILAN NEGERI (LOKASI TERGUGAT).</p>
							<table>
								<tr>
									<td>MASUKAN BIAYA </td>
									<td>-</td>
									<td><input class="col-sm-2 control-label" type="number" name="luar[]" placeholder="SESUAI SK BIAYA" required></td>
									<td></td>
								</tr>
								<tr>
							</table>
							<p class="redtext">UNTUK MELIHAT SK BIAYA PANJAR PN LAIN, CEK WEBSITE PENGADILAN NEGERI YANG DIMAKSUD ATAU HUBUNGI BAGIAN KEPANITERAAN PERDATA PENGADILAN NEGERI TONDANO.</p>
							<!---PNBP--->
							<td><input class="col-sm-2 control-label" type="hidden" name="pnbp[]" placeholder="SESUAI SK BIAYA LOKASI" value="20000" required></td>
							</tr>
							<tr>


								<br>
								<div id="insert-form"></div>
								<hr>
								<input class="cekbiaya" type="submit" value="Hitung">
								<button class="tambahdata" type="button" id="btn-tambah-form">Tambah Pihak Tergugat</button>
								<button class="tombolhapus" type="button" id="btn-reset-form">Reset Form</button>
								<a class="tombolhapus" value="hapus" href="form.php?hal=hapus">Hapus Perhitungan</a>
				</form>
				<!-- Kita buat textbox untuk menampung jumlah data form -->
				<input type="hidden" id="jumlah-form" value="1">

				<script>
					$(document).ready(function() { // Ketika halaman sudah diload dan siap
						$("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
							var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
							var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

							// Kita akan menambahkan form dengan menggunakan append
							// pada sebuah tag div yg kita beri id insert-form
							$("#insert-form").append("<b>Pihak " + nextform + " :</b>" +
								"<table>" +
								"<tr>" +
								"<td>LOKASI TERGUGAT</td>" +
								"<td><input type='text' name='wilayah[]' placeholder='MASUKAN LOKASI' required></td>" +
								"<tr>" +
								"<td>MASUKAN BIAYA</td>" +
								"<td><input type='number' name='luar[]' placeholder='SESUAI SK BIAYA' required></td>" +
								"</tr>" +
								"<tr>" +
								"<td><input type='hidden' name='pnbp[]' placeholder='SESUAI SK BIAYA LOKASI' value='20000'required></td>" +
								"</tr>" +
								"</table>");

							$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
						});

						// Buat fungsi untuk mereset form ke semula
						$("#btn-reset-form").click(function() {
							$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
							$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
						});
					});
				</script>
	</body>

	</html>

	<?php
	// fungsi buatRupiah
	function buatRupiah($angka)
	{
		$hasil = "Rp " . number_format($angka, 0, ',', '.');
		return $hasil;
	}
	?>




	<html>

	<head>

	</head>

	<body>



		<?php
		$connect = mysqli_connect('localhost', 'root', '', 'acbp');
		if (isset($_GET['hal'])) {
			if ($_GET['hal'] == "hapus") {
				//Persiapan hapus data
				$hapus = mysqli_query($connect, "DELETE FROM hitunglokasi  ");
				if ($hapus) {
					echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='form.php';
				     </script>";
				}
			}
		}
		?>

		</td>
		</tr>
		</table>
	</body>

	</html>

	<?php
	error_reporting(0); //menyembunyikan error
	$sql = mysqli_query($connect, "SELECT * FROM hitunglokasi");
	while ($r = mysqli_fetch_array($sql)) {
		//Looping Untuk menampilkan data (namabarang,jumlah,harga)

		$jumlah[] = $r['luar'];
	}
	//Total
	$jumlahnya = array_sum($jumlah);


	//Tampilkan
	//echo $jumlahnya*5;//

	?>

	<!---pnbp--->

	<?php
	error_reporting(0); //menyembunyikan error
	$sql = mysqli_query($connect, "SELECT * FROM hitunglokasi");
	while ($r = mysqli_fetch_array($sql)) {
		//Looping Untuk menampilkan data (namabarang,jumlah,harga)

		$jumlahpnbp[] = $r['pnbp'];
	}
	//Total
	$totalpnbp = array_sum($jumlahpnbp);


	//Tampilkan
	//echo $jumlahnya*5;//

	?>
	<!----test---->
	<h1>Rincian Biaya</h1>
	<table id="customers">
		<tr>
			<th>Rincian</th>
			<th>Biaya</th>
			<th>Keterangan</th>
		</tr>
		<td>Biaya Pendaftaran</td>
		<td><?php echo buatRupiah(30000) ?></td>
		<td></td>
		</tr>
		<tr>
			<td>Biaya Proses/ATK</td>
			<td><?php echo buatRupiah(50000); ?></td>
			<td></td>
		</tr>

		<tr>
		<tr>
			<td>Meterai</td>
			<td><?php echo buatRupiah(@10000); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>Redaksi</td>
			<td><?php echo buatRupiah(10000); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>PNBP Penggugat (2x)</td>
			<td><?php echo buatRupiah(20000); ?></td>
			<td></td>
		<tr>


		</tr>
		<tr>
			<td>PNBP Tergugat (2x)</td>
			<td><?php echo buatRupiah($totalpnbp); ?></td>
			<td></td>
		<tr>


		</tr>

		<?php


		$no++; // Tambah 1 setiap kali looping


		?>
	</table>

	<table id="customers">
		<tr>
			<th>Gugatan</th>
			<td>Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI(5x) = <?php echo buatRupiah($jumlahnya * 5) ?></td>
		<tr>
			<th>Gugatan Sederhana</th>
			<td>Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI(3x) = <?php echo buatRupiah($jumlahnya * 3) ?></td>
		</tr>
		<tr>

	</table>
	<!---<div>"Untuk Total Biaya Dibawah didapat dari hasil perhitungan sesuai sesuai dengan jumlah Data biaya ditambah dengan biaya Lainnya".
</div><br>
	<div> "Gugatan" (Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI (5x))</div>
	<br>
	<div> "Permohonan" (Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI (2x))</div>
	<br>---->
	<!---<div> "Gugatan Sederhana" (Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI (5x))</div>--->
	<h1>TOTAL</h1>
	<table id="kuning">
		<tr>
			<th>
				<h1>Gugatan</h1>
			</th>
			<td>
				<h1><?php echo buatRupiah($jumlahnya * 5 + 120000 + $totalpnbp) ?><h1>
			</td>
			<!---	<th>Permohonan</th>
			<td><//?php echo buatRupiah ($jumlahnya*2+140000) ?></td>--->
			<th>
				<h1>Gugatan Sederhana</h1>
			</th>
			<td>
				<h1><?php echo buatRupiah($jumlahnya * 3 + 120000 + $totalpnbp) ?></h1>
			</td>
		</tr>

		<table id="customers">
			<h2>DATA</h2>
			<tr>
				<th>No</th>
				<th>Lokasi/Daerah </th>
				<th>Biaya</th>


			</tr>
			<?php
			// Load file koneksi.php

			$connect = mysqli_connect('localhost', 'root', '', 'acbp');
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($connect, "SELECT * FROM hitunglokasi");

			$no = 1; // Untuk penomoran tabel, di awal set dengan 1
			while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
				echo "<tr>";
				echo "<td>" . $no . "</td>";
				echo "<td>" . $data['wilayah'] . "</td>";
				echo "<td>" . buatrupiah($data['luar']) . "</td>";


				echo "</tr>";
				$no++; // Tambah 1 setiap kali looping
			}

			?>
		</table>
</body>

</html>

<br>
<?php error_reporting(0); ?>
<footer class="footer">
	<p class="footer__title">
	<h3>MEDIA INFORMASI LAINNYA</h3>
	<div class="footer__social">
		<a href="https://facebook.com/pengadilannegeritondano" class="footer__icon"><i class='bx bxl-facebook'></i></a>
		<a href="https://www.instagram.com/pntondano" class="footer__icon"><i class='bx bxl-instagram'></i></a>
		<a href="https://www.twitter.com/pntondano" class="footer__icon"><i class='bx bxl-twitter'></i></a>
		<a href="http://wa.me/6282382777808" class="footer__icon"><i class='bx bxl-whatsapp'></i></a>
		<a href="https://www.youtube.com/channel/UCh8Vk1UgO8eZ2HjoHqHGUMg" class="footer__icon"><i class='bx bxl-youtube'></i></a>
	</div>
	<p>&#169; 2020 copyright all right reserved</p>
</footer>


<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>
</body>

</html>