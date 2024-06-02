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
  <title>ADMIN</title>

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
  <link href="css/style.css" rel="stylesheet">
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
      <a href="#" class="logo"><b>SELAMAT<span>DATANG</span></b></a>
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
          <li class="mt">
            <a class="active" href="wilayah.php">
              <i class="fa fa-dashboard"></i>
              <span>WILAYAH</span>
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
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/xxstyles.css" rel="stylesheet" />
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
            <link href="css/style.css" rel="stylesheet">
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
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-desktop"></i>
                <span>GUGATAN</span>
              </a>
              <ul class="sub">
                <li><a href="radius.php">RADIUS</a></li>
                <li><a href="biayaumum.php">BIAYA UMUM</a></li>


              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-desktop"></i>
                <span>PERMOHONAN</span>
              </a>
              <ul class="sub">
                <li><a href="radius2.php">RADIUS</a></li>
                <li><a href="biayaumum2.php">BIAYA UMUM</a></li>


              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>PENGATURAN</span>
              </a>
              <ul class="sub">
                <li><a href="../login/register.php">TAMBAH AKUN</a></li>

              </ul>
            </li>


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
          <link href="css/style.css" rel="stylesheet">
          <link href="css/style-responsive.css" rel="stylesheet">
          <script src="lib/chart-master/Chart.js"></script>

          <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
        </head>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
          <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">APLIKASI CEK BIAYA PANJAR PERKARA PENGADILAN NEGERI TONDANO KELAS 1B</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
              <!-- Portfolio Item 1-->
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="..." />
                </div>
              </div>
              <!-- Portfolio Item 2-->
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="..." />
                </div>
              </div>
              <!-- Portfolio Item 3-->
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="..." />
                </div>
              </div>
              <!-- Portfolio Item 4-->
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/game.png" alt="..." />
                </div>
              </div>
              <!-- Portfolio Item 5-->
              <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="..." />
                </div>
              </div>
              <!-- Portfolio Item 6-->
              <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="..." />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- About Section-->



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>



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