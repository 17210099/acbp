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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Minahasa</title>

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

                        <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
                    </head>

                    <?php
                    include "navbar.php";
                    ?>

                    </html>


                </ul>
                <!-- sidebar menu end-->
            </div>
            </div>
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">


                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <!--CUSTOM CHART START -->
                        <div class="border-head">
                            <?php
                            //Koneksi Database
                            $server = "localhost";
                            $user = "root";
                            $pass = "";
                            $database = "acbp";

                            $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));


                            //jika tombol simpan diklik

                            if (isset($_POST['bsimpan'])) {
                                //Pengujian Apakah data akan diedit atau disimpan baru
                                if ($_GET['hal'] == "edit") {
                                    //Data akan di edit
                                    $edit = mysqli_query($koneksi, "UPDATE minahasa SET
		id = '$_POST[tid]',
		nama = '$_POST[tnama]'
		
	WHERE id_no = '$_GET[id]'
  ");
                                    if ($edit) //jika edit sukses
                                    {

                                        echo "<script>
					alert('Edit data suksess!');
					document.location='wilayah.php';
				 </script>";
                                    } else {
                                        echo "<script>
					alert('Edit data GAGAL!!');
					document.location='wilayah.php';
				 </script>";
                                    }
                                } else {
                                    //Data akan disimpan Baru
                                    $simpan = mysqli_query($koneksi, "INSERT INTO minahasa (id, nama)
									  VALUES ('$_POST[tid]',
											   '$_POST[tnama]')
									 ");
                                    if ($simpan) //jika simpan sukses
                                    {
                                        echo "<script>
					alert('Simpan data suksess!');
					document.location='wilayah.php';
				 </script>";
                                    } else {
                                        echo "<script>
					alert('Simpan data GAGAL!!');
					document.location='wilayah.php';
				 </script>";
                                    }
                                }
                            }

                            //Pengujian jika tombol Edit / Hapus di klik
                            if (isset($_GET['hal'])) {
                                //Pengujian jika edit Data
                                if ($_GET['hal'] == "edit") {
                                    //Tampilkan Data yang akan diedit
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM minahasa WHERE id_no = '$_GET[id]' ");
                                    $data = mysqli_fetch_array($tampil);
                                    if ($data) {
                                        //Jika data ditemukan, maka data ditampung ke dalam variabel
                                        $vid = $data['id'];
                                        $vnama = $data['nama'];
                                    }
                                } else if ($_GET['hal'] == "hapus") {
                                    //Persiapan hapus data
                                    $hapus = mysqli_query($koneksi, "DELETE FROM minahasa WHERE id_no = '$_GET[id]' ");
                                    if ($hapus) {
                                        echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='wilayah.php';
				     </script>";
                                    }
                                }
                            }

                            ?>



                            <div class="container">



                                <!-- Awal Card Form -->


                            </div>

                            <h3>
                                <div class="card-body">
                                    <h1>MINAHASA</h1>
                                    <br>
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label>Radius</label>
                                            <input type="number" name="tid" value="<?= @$vid ?>" class="form-control" placeholder="" required>
                                        </div>
                            </h3>
                            <h3>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" name="tnama" value="<?= @$vnama ?>" class="form-control" placeholder="" required>
                                </div>
                            </h3>
                            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>

                            </form>
                        </div>
                    </div>

                    <!-- Akhir Card Form -->

                    <!-- Awal Card Tabel -->


                </div>
                <div class="card-body">
                    <h3>DATA WILAYAH</h3>
                    <h4>
                        <table id="customers">
                            <tr>

                                <th>Radius</th>
                                <th>Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $tampil = mysqli_query($koneksi, "SELECT * from minahasa order by id_no desc");
                            while ($data = mysqli_fetch_array($tampil)) :

                            ?>
                                <tr>

                                    <td><?= $data['id'] ?></td>
                                    <td><?= $data['nama'] ?></td>

                                    <td>
                                        <a href="wilayah.php?hal=edit&id=<?= $data['id_no'] ?>" class="btn btn-warning"> Edit </a>
                                        <a href="wilayah.php?hal=hapus&id=<?= $data['id_no'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                                    </td>
                                </tr>
                            <?php endwhile; //penutup perulangan while 
                            ?>
                        </table>

                </div>
                </div>
                </h4>
                <!-- Akhir Card Tabel -->

                </div>

                <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
</div>

<!-- /row -->
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