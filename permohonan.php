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
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <link rel="stylesheet" href="assets/css/menutengah.css">
    <link rel="stylesheet" href="assets/css/tombolcek.css">
    <link rel="stylesheet" href="assets/css/tambahcss.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Gugatan</title>
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>


<!--===== HEADER =====-->

<body class="sub_page">
    <div class="hero_area ">
        <!-- header section strats -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="LAMPIRAN+BIAYA+PERKARA+BARU.php">SK BIAYA PERKARA PN TONDANO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.pn-tondano.go.id">PENGADILAN NEGERI TONDANO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://sipp.pn-tondano.go.id/">SIPP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ecourt.mahkamahagung.go.id/">E-COURT</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="login/login.php">ADMIN</a>
                </form>
                <li class="nav">
                    <a class="nav-link" href="#"></a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="contact.php">HUBUNGI KAMI</a>
                </form>
            </div>
        </nav>
        <!-- end header section -->
    </div>


    <!----Menu ---->

    <?php

    $koneksi = mysqli_connect('localhost', 'root', '', 'acbp');

    if (isset($_POST['hitung'])) {

        $pemohon   = $_POST['pemohon'];
        $jumlah1 = 0;
        $jumlah_1 = mysqli_query($koneksi, "SELECT * FROM permohonanradius WHERE id_per = '$pemohon' ");
        while ($tabelA = mysqli_fetch_array($jumlah_1)) {
            $dataA = $tabelA['radius']; {

                $jumlah1 = $jumlah1 + $dataA;
                $jumlah1 = $jumlah1;
            }
        }


        //echo "total jumlah adalah : " .$jumlah1;



    }


    //permohohnan lokasi radius pertama (PROSES MENAMPILKAN BIAYA PENDAFTARAN,BIAYA PROSES, METERAI,REDAKSI, PNBP, PEMBRITAHUAN KEPUTUSAN)


    if (isset($_POST['hitung'])) {


        $pendaftaran1    = $_POST['pemohon'];
        $pendaftaran = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM permohonan2 WHERE id = '$pendaftaran1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pendaftaran']; {

                $pendaftaran = $pendaftaran + $datac;
            }
        }


        //echo "total jumlah adalah : " .$pendaftaran;

    }

    if (isset($_POST['hitung'])) {


        $biayaproses    = $_POST['pemohon'];
        $biayaatk = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM permohonan2 WHERE id = '$biayaproses' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['biayaproses']; {

                $biayaatk = $biayaatk + $datac;
            }
        }


        //echo "total jumlah adalah : " .$biayaatk;

    }

    if (isset($_POST['hitung'])) {


        $meterai1    = $_POST['pemohon'];
        $meterai = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM permohonan2 WHERE id = '$meterai1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['meterai']; {

                $meterai = $meterai + $datac;
            }
        }


        //echo "total jumlah adalah : " .$meterai;

    }
    if (isset($_POST['hitung'])) {


        $redaksi1    = $_POST['pemohon'];
        $redaksi = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM permohonan2 WHERE id = '$redaksi1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['meterai']; {

                $redaksi = $redaksi + $datac;
            }
        }


        //echo "total jumlah adalah : " .$redaksi;

    }
    if (isset($_POST['hitung'])) {


        $pnbp1    = $_POST['pemohon'];
        $pnbp = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM permohonan2 WHERE id = '$pnbp1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp = $pnbp + $datac;
                $pnbp = $pnbp * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }

    ?>


    <!--- Input Wilayah ---->
    <section class="contact_section layout_padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <div class="form_container">
                        <div class="heading_container">
                            <h1>PERMOHONAN</h1>
                            <form method="POST">
                                <h6>Pengadilan Negeri Tondano mencakup 1 Kota dan 2 Kabupaten yaitu Kota Tomohon, Kabuptaen Minahasa, dan Kabupaten Minahasa Tenggara.
                                    jika lokasi tidak ada dalam kolom ataupun lokasi tergugat berada di luar lingkup Peradilan Pengadilan Negeri Tondano silahkan <a href="contact.php">hubungi kami</a> Terima kasih.</h6>

                                </h6>
                                <h6 class="redtext">Informasi, untuk pendaftaran melalui aplikasi E-Court maka biaya panggilan kepada penggugat hanya melalui panggilan email.</h6>
                                <table>


                                    <br>
                                    <h5><select class="js-example-basic-single" type="text" name="pemohon">
                                            <option value="">Pilih Lokasi </option>
                                            <option strong disabled class="redtext">MINAHASA</option>

                                            <?php
                                            // Load file koneksi.php

                                            // Buat query untuk menampilkan semua data siswa
                                            $sql = mysqli_query($koneksi, "SELECT * FROM minahasa");

                                            while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                                                echo "<option value='" . $data['id'] . "'>" . $data['nama'] . "</option>";
                                            }
                                            ?>

                                            <option disabled class="redtext">TOMOHON</option>
                                            <?php
                                            // Load file koneksi.php

                                            // Buat query untuk menampilkan semua data siswa
                                            $sql = mysqli_query($koneksi, "SELECT * FROM tomohon");

                                            while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                                                echo "<option value='" . $data['id'] . "'>" . $data['wilayah'] . "</option>";
                                            }
                                            ?>
                                            <option disabled class="redtext">MINAHASA TENGGARA</option>
                                            <?php
                                            // Load file koneksi.php

                                            // Buat query untuk menampilkan semua data siswa
                                            $sql = mysqli_query($koneksi, "SELECT * FROM minahasatenggara");

                                            while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                                                echo "<option value='" . $data['id'] . "'>" . $data['nama'] . "</option>";
                                            }
                                            ?>
                                        </select>


                                        </tr>
                                        </tr>
                                        <style>

                                        </style>


                                        <img src="">
                        </div>
                        <alt="">

                    </div>
                    <script>
                        $(document).ready(function() {
                            $('.js-example-basic-single').select2();
                        });
                    </script>
                    </select>
                    </td>
                    </tr>
                    <tr>



                        <input type="submit" href="hasil.php" class="cekbiaya" name="hitung" value="CEK BIAYA">

                        </td>
                    </tr>
                    </table>
                    </form>



                    </select>

                </div>

            </div>
        </div>
        <div class="col-md-6 px-0">
            <form method="post" action="hitung1.php">
                <table id="customers">
                    <tr>
                        <th>Permohonan</th>
                        <th>Biaya</th>
                    </tr>
                    <tr>
                        <td>Biaya Pendaftaran</td>
                        <td><?php echo buatRupiah(@$pendaftaran) ?></td>
                    </tr>
                    <tr>
                        <td>Biaya Proses/ATK</td>
                        <td><?php echo buatRupiah(@$biayaatk); ?></td>
                    </tr>
                    <!--- <tr>
    <td>Biaya Panggilan </td>
    <td><? //php echo buatRupiah(0) 
        ?></td>
  </tr>--->
                    <tr>
                        <td>PNBP</td>
                        <td><?php echo buatRupiah(@$pnbp); ?></td>
                    </tr>
                    <tr>
                        <td>Meterai</td>
                        <td><?php echo buatRupiah(@$meterai); ?></td>
                    </tr>
                    <tr>
                        <td>Redaksi</td>
                        <td><?php echo buatRupiah(@$redaksi); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <strong>JUMLAH</strong>

                        </td>
                        <td>
                            <strong><?php echo buatRupiah(@$pendaftaran + @$biayaatk + @$meterai + @$redaksi + @$pnbp); ?>
                        </td>

        </div>
        </div>
        </div>
        </div>
        </div>

    </section>




    <html>

    <head>

    </head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        .redtext {
            color: red;
        }
    </style>



    </style>


    <img src="">
    </div>
    <alt="">

        </div>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
        </select>
        </td>
        </tr>
        <tr>

        </tr>
        </table>
        </form>
        <hr />


</body>













<!-----TABEL ---->


<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #dddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #ffff;
        }

        #customers tr:hover {
            background-color: #dddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

</div>
</div>
</div>
</div>
</div>




<br>
<br>
<br>
<br>
<br>
<!--===== FOOTER =====-->
<!-- info section -->
<section class="info_section ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="info_contact">
                    <h5>
                        HUBUNGI KAMI
                    </h5>
                    <div>
                        <img src="images/call.png" alt="" />
                        <p>
                            No. (0431) 321122 atau 321241
                        </p>
                    </div>
                    <div>
                        <img src="images/mail.png" alt="" />
                        <p>
                            Email. info@pn-tondano.go.id
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="info_time">
                    <h5>
                        jAM KERJA KANTOR
                    </h5>
                    <div>
                        <p>
                            SENIN - KAMIS
                        </p>
                    </div>
                    <div>
                        <p>
                            08:00 PAGI - 04:30 SORE
                        </p>
                    </div>
                    <div>
                        <p>
                            JUMAT
                        </p>
                    </div>
                    <div>
                        <p>
                            08:00 PAGI - 05:00 SORE
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="info_social">
                    <h5>
                        social media
                    </h5>
                    <div class="social_container">
                        <div>
                            <a href="https://facebook.com/pengadilannegeritondano">
                                <img src="images/fb.png" alt="" />
                            </a>
                        </div>
                        <div>
                            <a href="https://www.twitter.com/pntondano">
                                <img src="images/twitter.png" alt="" />
                            </a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/pntondano">
                                <img src="images/instagram.png" alt="" />
                            </a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/channel/UCh8Vk1UgO8eZ2HjoHqHGUMg"">
                  <img src=" images/youtube.png" alt="" />
                            </a>
                        </div>
                        <div>
                            <a href="http://wa.me/6285163088505">
                                <img src="images/whatsapp.png" alt="" />
                            </a>
                        </div>
                        <div>
                            <a href="https://www.google.com/maps/place/Pengadilan+Negeri+Tondano/@1.3161442,124.9070545,17z/data=!4m10!1m2!2m1!1sPengadilan+Ngerei+Tondano!3m6!1s0x32871383b3c89b55:0xac718e1b295f6436!8m2!3d1.3136032!4d124.9129679!15sChlQZW5nYWRpbGFuIE5nZXJlaSBUb25kYW5vkgERZ292ZXJubWVudF9vZmZpY2XgAQA!16s%2Fg%2F11c1xj31_n?entry=ttu">
                                <img src="images/googlemaps.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="info_form pl-lg-4">
                    <h5>
                        SIAP (Sehati, Inovatif, Akuntabel, Profesional)

                    </h5>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end info_section -->

<!-- footer section -->
<section class="container-fluid footer_section ">
    <p>
        &copy; 2023 All Rights Reserved.

    </p>
</section>
<!-- end  footer section -->


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width")
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
</script>

</body>

</html>


<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>
</body>

</html>