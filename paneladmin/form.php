<?php

session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login/login.php");
}

?>

<?php
// fungsi buatRupiah
function buatRupiah($angka)
{
	$hasil = "Rp " . number_format($angka, 0, ',', '.');
	return $hasil;
}
?>

<!--===== HEADER =====-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>Hitung Delegasi</title>

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--external css-->
	<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
	<!-- Custom styles for this template -->
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">
	<script src="lib/chart-master/Chart.js"></script>

	<link rel="stylesheet" href="paneladmin/assets/css/styles.css">
	<link rel="stylesheet" href="paneladmin/assets/css/menutengah.css">
	<link rel="stylesheet" href="paneladmin/assets/css/tombolcek.css">
	<link rel="stylesheet" href="paneladmin/assets/css/tambahcss.css">
	<link rel="stylesheet" href="paneladmin/assets/css/textmerah.css">
	<style>
		.col-sm-2 {
			width: 90%;
		}

		.redtext {
			color: red;
		}
	</style>
	<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
	<section id="container">
		<!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
		<!--header start-->
		<header class="header black-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right"></div>
			</div>
			<!--logo start-->
			<a href="#" class="logo"><b>SELAMAT <span>DATANG</span></b></a>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu">
				<!--  notification start -->
				<ul class="nav top-menu">
					<!-- settings start -->

					<!-- settings end -->
					<!-- inbox dropdown start-->

					<!-- inbox dropdown end -->
					<!-- notification dropdown start-->

					<!--  notification end -->
			</div>
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="logout.php">Logout</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->
		<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
					<p class="centered"><a href="#"><img src="img/Logo_Pengadilan.png" class="img-circle" width="80"></a></p>
					<h5 class="centered">DATA BIAYA PERKARA PENGADILAN NEGERI TONDANO</h5>

					</a>
					</li>


					<!DOCTYPE html>
					<html lang="en">

					<head>
						<meta charset="utf-8">
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<meta name="description" content="">
						<meta name="author" content="Dashboard">
						<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
						<title>Dashio - Bootstrap Admin Template</title>

						<!-- Favicons -->
						<link href="img/favicon.png" rel="icon">
						<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

						<!-- Bootstrap core CSS -->
						<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
						<!--external css-->
						<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
						<link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
						<link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
						<!-- Custom styles for this template -->
						<link href="css/styles.css" rel="stylesheet">
						<link href="css/style-responsive.css" rel="stylesheet">
						<script src="lib/chart-master/Chart.js"></script>
						<style>
							.col-sm-2 {
								width: 90%;
							}
						</style>

						<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
					</head>

					<body>
						<?php
						include "navbar.php";
						?>

						<body>

					</html>


				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->
		<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">

				<!DOCTYPE html>
				<html lang="en">

				<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<meta name="description" content="">
					<meta name="author" content="Dashboard">
					<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
					<title>Dashio - Bootstrap Admin Template</title>

					<!-- Favicons -->
					<link href="img/favicon.png" rel="icon">
					<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

					<!-- Bootstrap core CSS -->
					<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
					<!--external css-->
					<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
					<link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
					<link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
					<!-- Custom styles for this template -->
					<link href="css/styles.css" rel="stylesheet">
					<link href="css/style-responsive.css" rel="stylesheet">
					<script src="lib/chart-master/Chart.js"></script>

					<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
				</head>


				<!--- ISI ---->
				<style>

				</style>
				<style>
					input[type="numberr"] {
						width: 100%;
						padding: 12px 20px;
						margin: 8px 14px;
						box-sizing: border-box;
						border: 1px solid #555;
						outline: none;
					}

					input[type="number"] {
						width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
						border: 1px solid #555;
						outline: none;
					}

					.col-sm-2 {
						width: 90%;
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
						border: 1px solid #000;
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
					<h4>
						<h4>
							<br>
							<p class="">#Untuk Kolom <strong>Lokasi Tergugat</strong> masukan nama lokasi/alamat tergugat (desa/kelurahan/kecamatan) sesuai sk biaya pengadilan negeri.

							</p>
							<br>
							<p class="">#Untuk Kolom <strong>Masukan Biaya</strong> masukan biaya sesuai nama alamat/lokasi tergugat berdasarkan sk biaya panjar pengadilan lain .</p>
							<form method="post" action="proses.php">
								<!-- Buat tombol untuk menabah form data -->
								<br><br>
								<div class="control-group">
									<div class="card-body">
										<b>Pihak 1 :</b>
										<table>
											<tr>
												<td>LOKASI TERGUGAT-</td>
												<td><input class="col-sm-2 control-label" type="text" name="wilayah[]" placeholder="MASUKAN LOKASI" required></td>
												<td></td>
											</tr>
										</table>

										<table>
											<tr>
												<td>MASUKAN BIAYA </td>
												<td>-</td>
												<td><input class="col-sm-2 control-label" type="numberr" name="luar[]" placeholder="SESUAI SK BIAYA" required></td>
												<td></td>
											</tr>
											<tr>
										</table>

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
											<button><a class="redtext" value="hapus" href="form.php?hal=hapus">Hapus Perhitungan</a></button>
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
											"<td>LOKASI TERGUGAT-</td>" +
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

				<h1>Rincian Biaya</h1>
				<table id="customers">
					<tr>
						<th>Rincian</th>
						<th>Biaya</th>

					</tr>
					<td>Biaya Pendaftaran</td>
					<td><?php echo buatRupiah(30000) ?></td>

					</tr>
					<tr>
						<td>Biaya Proses/ATK</td>
						<td><?php echo buatRupiah(50000); ?></td>

					</tr>

					<tr>
					<tr>
						<td>Meterai</td>
						<td><?php echo buatRupiah(@10000); ?></td>

					</tr>
					<tr>
						<td>Redaksi</td>
						<td><?php echo buatRupiah(10000); ?></td>

					</tr>
					<tr>
						<td>PNBP Penggugat</td>
						<td><?php echo buatRupiah(10000); ?></td>

					<tr>


					</tr>
					<tr>
						<td>PNBP Tergugat (2x)</td>
						<td><?php echo buatRupiah($totalpnbp); ?></td>
					<tr>


					</tr>

					<?php


					$no++; // Tambah 1 setiap kali looping


					?>
				</table>
				<br><br>
				<table id="customers">
					<tr>
						<th>Gugatan</th>
						<th>Biaya</th>
					<tr>
						<td>Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI(5x) </td>
						<td> <?php echo buatRupiah($jumlahnya * 5) ?></td>
					</tr>
				</table>
				<br>
				<br>
				<table id="customers">
					<tr>
						<th>Gugatan Sederhana</th>
						<th>Biaya</th>
					<tr>
						<td>Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI(3x) </td>
						<td><?php echo buatRupiah($jumlahnya * 3) ?></td>
					</tr>
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
							Gugatan
						</th>
						<td>
							<?php echo buatRupiah($jumlahnya * 5 + 110000 + $totalpnbp) ?>
						</td>
						<!---	<th>Permohonan</th>
			<td><//?php echo buatRupiah ($jumlahnya*2+140000) ?></td>--->
						<th>
							Gugatan Sederhana
						</th>
						<td>
							<?php echo buatRupiah($jumlahnya * 3 + 110000 + $totalpnbp) ?>
						</td>
					</tr>
				</table>


</body>

</html>

<br>
<?php error_reporting(0); ?>



<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="../assets/js/main.js"></script>
</body>

</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</section>
</section>
<!--main content end-->
<!--footer start-->
<!----  <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
<!---Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>----->
<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>

<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="lib/sparkline-chart.js"></script>
<script src="lib/zabuto_calendar.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Selamat Datang,
			// (string | mandatory) the text inside the notification
			text: 'DATA APLIKASI BIAYA PERKARA PENGADILAN NEGERI TONDANO.',
			// (string | optional) the image to display on the left
			image: 'img/ui-sam.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: 8000,
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});

		return false;
	});
</script>
<script type="application/javascript">
	$(document).ready(function() {
		$("#date-popover").popover({
			html: true,
			trigger: "manual"
		});
		$("#date-popover").hide();
		$("#date-popover").click(function(e) {
			$(this).hide();
		});

		$("#my-calendar").zabuto_calendar({
			action: function() {
				return myDateFunction(this.id, false);
			},
			action_nav: function() {
				return myNavFunction(this.id);
			},
			ajax: {
				url: "show_data.php?action=1",
				modal: true
			},
			legend: [{
					type: "text",
					label: "Special event",
					badge: "00"
				},
				{
					type: "block",
					label: "Regular event",
				}
			]
		});
	});

	function myNavFunction(id) {
		$("#date-popover").hide();
		var nav = $("#" + id).data("navigation");
		var to = $("#" + id).data("to");
		console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
	}
</script>


</body>

</html>