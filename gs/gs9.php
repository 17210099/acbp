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
                        <a class="nav-link" href="../index.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../LAMPIRAN+BIAYA+PERKARA+BARU.php">SK BIAYA PERKARA PN TONDANO</a>
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
                    <a class="btn btn-outline-success my-2 my-sm-0" href="../login/login.php">ADMIN</a>
                </form>
                <li class="nav">
                    <a class="nav-link" href="#"></a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="../contact.php">HUBUNGI KAMI</a>
                </form>
            </div>
        </nav>
        <!-- end header section -->
    </div>


    <!----Menu ---->

    <?php

    $koneksi = mysqli_connect('localhost', 'root', '', 'acbp');

    if (isset($_POST['hitung'])) {




        //echo "total jumlah adalah : " .$jumlah1;



    }

    if (isset($_POST['hitung'])) {


        $tergugat = $_POST['tergugat'];

        $jumlah2 = 0;
        $jumlah_2 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat' ");
        while ($tabelB = mysqli_fetch_array($jumlah_2)) {
            $dataB = $tabelB['radius']; {

                $jumlah2 = $jumlah2 + $dataB;
                $jumlah2 = $jumlah2 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }
    if (isset($_POST['hitung'])) {


        $tergugat2 = $_POST['tergugat2'];

        $jumlah21 = 0;
        $jumlah_21 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat2' ");
        while ($tabelB = mysqli_fetch_array($jumlah_21)) {
            $dataB = $tabelB['radius']; {

                $jumlah21 = $jumlah21 + $dataB;
                $jumlah21 = $jumlah21 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    //kolom3
    if (isset($_POST['hitung'])) {


        $tergugat3 = $_POST['tergugat3'];

        $jumlah31 = 0;
        $jumlah_31 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat3' ");
        while ($tabelB = mysqli_fetch_array($jumlah_31)) {
            $dataB = $tabelB['radius']; {

                $jumlah31 = $jumlah31 + $dataB;
                $jumlah31 = $jumlah31 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    if (isset($_POST['hitung'])) {


        $tergugat4 = $_POST['tergugat4'];

        $jumlah41 = 0;
        $jumlah_41 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat4' ");
        while ($tabelB = mysqli_fetch_array($jumlah_41)) {
            $dataB = $tabelB['radius']; {

                $jumlah41 = $jumlah41 + $dataB;
                $jumlah41 = $jumlah41 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    if (isset($_POST['hitung'])) {


        $tergugat5 = $_POST['tergugat5'];

        $jumlah51 = 0;
        $jumlah_51 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat5' ");
        while ($tabelB = mysqli_fetch_array($jumlah_51)) {
            $dataB = $tabelB['radius']; {

                $jumlah51 = $jumlah51 + $dataB;
                $jumlah51 = $jumlah51 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    //kolom6
    if (isset($_POST['hitung'])) {


        $tergugat6 = $_POST['tergugat6'];

        $jumlah61 = 0;
        $jumlah_61 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat6' ");
        while ($tabelB = mysqli_fetch_array($jumlah_61)) {
            $dataB = $tabelB['radius']; {

                $jumlah61 = $jumlah61 + $dataB;
                $jumlah61 = $jumlah61 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    //kolom7
    if (isset($_POST['hitung'])) {


        $tergugat7 = $_POST['tergugat7'];

        $jumlah71 = 0;
        $jumlah_71 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat7' ");
        while ($tabelB = mysqli_fetch_array($jumlah_71)) {
            $dataB = $tabelB['radius']; {

                $jumlah71 = $jumlah71 + $dataB;
                $jumlah71 = $jumlah71 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    if (isset($_POST['hitung'])) {


        $tergugat8 = $_POST['tergugat8'];

        $jumlah81 = 0;
        $jumlah_81 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat8' ");
        while ($tabelB = mysqli_fetch_array($jumlah_81)) {
            $dataB = $tabelB['radius']; {

                $jumlah81 = $jumlah81 + $dataB;
                $jumlah81 = $jumlah81 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    if (isset($_POST['hitung'])) {


        $tergugat9 = $_POST['tergugat9'];

        $jumlah91 = 0;
        $jumlah_91 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat9' ");
        while ($tabelB = mysqli_fetch_array($jumlah_91)) {
            $dataB = $tabelB['radius']; {

                $jumlah91 = $jumlah91 + $dataB;
                $jumlah91 = $jumlah91 * 3;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }

    if (isset($_POST['hitung'])) {

        $penggugat1    = $_POST['tergugat'];
        $jumlah11 = 0;
        $jumlah_11 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$penggugat1' ");
        while ($tabelA = mysqli_fetch_array($jumlah_11)) {
            $dataA = $tabelA['radius']; {

                $jumlah11 = $jumlah11 + $dataA;
                $jumlah11 = $jumlah11 * 2;
            }
        }


        //echo "total jumlah adalah : " .$jumlah1;



    }

    if (isset($_POST['hitung'])) {


        $tergugat = $_POST['tergugat'];

        $jumlah22 = 0;
        $jumlah_22 = mysqli_query($koneksi, "SELECT * FROM biayagugatan WHERE id_rad = '$tergugat' ");
        while ($tabelB = mysqli_fetch_array($jumlah_22)) {
            $dataB = $tabelB['radius']; {

                $jumlah22 = $jumlah22 + $dataB;
                $jumlah22 = $jumlah22 * 4;
            }
        }


        //echo "total jumlah adalah : " .$jumlah2;

    }
    //gugatan lokasi radius pertama (PROSES MENAMPILKAN BIAYA PENDAFTARAN,BIAYA PROSES, METERAI,REDAKSI, PNBP, PEMBRITAHUAN KEPUTUSAN)


    if (isset($_POST['hitung'])) {


        $pendaftaran1    = $_POST['tergugat'];
        $pendaftaran = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pendaftaran1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pendaftaran']; {

                $pendaftaran = $pendaftaran + $datac;
            }
        }


        //echo "total jumlah adalah : " .$pendaftaran;

    }

    if (isset($_POST['hitung'])) {


        $biayaproses    = $_POST['tergugat'];
        $biayaatk = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$biayaproses' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['biayaproses']; {

                $biayaatk = $biayaatk + $datac;
            }
        }


        //echo "total jumlah adalah : " .$biayaatk;

    }

    if (isset($_POST['hitung'])) {


        $meterai1    = $_POST['tergugat'];
        $meterai = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$meterai1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['meterai']; {

                $meterai = $meterai + $datac;
            }
        }


        //echo "total jumlah adalah : " .$meterai;

    }
    if (isset($_POST['hitung'])) {


        $redaksi1    = $_POST['tergugat'];
        $redaksi = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$redaksi1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['meterai']; {

                $redaksi = $redaksi + $datac;
            }
        }


        //echo "total jumlah adalah : " .$redaksi;

    }
    if (isset($_POST['hitung'])) {


        $pnbp1    = $_POST['tergugat'];
        $pnbp = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp1' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp = $pnbp + $datac;
                $pnbp = $pnbp;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }
    if (isset($_POST['hitung'])) {


        $pnbp1x    = $_POST['tergugat'];
        $pnbpx = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp1x' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbpx = $pnbpx + $datac;
                $pnbpx = $pnbpx * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }
    if (isset($_POST['hitung'])) {


        $pnbp12    = $_POST['tergugat2'];
        $pnbp02 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp12' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp02 = $pnbp02 + $datac;
                $pnbp02 = $pnbp02 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }

    if (isset($_POST['hitung'])) {


        $pnbp13    = $_POST['tergugat3'];
        $pnbp03 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp13' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp03 = $pnbp03 + $datac;
                $pnbp03 = $pnbp03 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }
    if (isset($_POST['hitung'])) {


        $pnbp14    = $_POST['tergugat4'];
        $pnbp04 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp14' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp04 = $pnbp04 + $datac;
                $pnbp04 = $pnbp04 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }
    if (isset($_POST['hitung'])) {


        $pnbp15    = $_POST['tergugat5'];
        $pnbp05 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp15' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp05 = $pnbp05 + $datac;
                $pnbp05 = $pnbp05 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }


    if (isset($_POST['hitung'])) {


        $pnbp16    = $_POST['tergugat6'];
        $pnbp06 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp16' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp06 = $pnbp06 + $datac;
                $pnbp06 = $pnbp06 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }

    if (isset($_POST['hitung'])) {


        $pnbp17    = $_POST['tergugat7'];
        $pnbp07 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp17' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp07 = $pnbp07 + $datac;
                $pnbp07 = $pnbp07 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }


    if (isset($_POST['hitung'])) {


        $pnbp18    = $_POST['tergugat8'];
        $pnbp08 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp18' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp08 = $pnbp08 + $datac;
                $pnbp08 = $pnbp08 * 2;
            }
        }


        // echo "total jumlah adalah : " .$pnbp;

    }

    if (isset($_POST['hitung'])) {


        $pnbp19    = $_POST['tergugat9'];
        $pnbp09 = 0;
        $jumlah_3 = mysqli_query($koneksi, "SELECT * FROM biayagugatan2 WHERE id = '$pnbp19' ");
        while ($tabelc = mysqli_fetch_array($jumlah_3)) {
            $datac = $tabelc['pnbp']; {

                $pnbp09 = $pnbp09 + $datac;
                $pnbp09 = $pnbp09 * 2;
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
                            <h1>GUGATAN</h1>
                            <form method="POST">
                                <h6>Pengadilan Negeri Tondano mencakup 1 Kota dan 2 Kabupaten yaitu Kota Tomohon, Kabuptaen Minahasa, dan Kabupaten Minahasa Tenggara.
                                    jika lokasi tidak ada dalam kolom ataupun lokasi tergugat berada di luar lingkup Peradilan Pengadilan Negeri Tondano silahkan <a href="../contact.php">hubungi kami</a> Terima kasih.</h6>

                                </h6>
                                <table>


                                    <br>
                                    <h5><select class="js-example-basic-single" type="text" name="tergugat">
                                            <option value="">Pilih Lokasi Tegugat</option>
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

                                        <select class="js-example-basic-single" type="text" name="tergugat2">
                                            <option value="">Pilih Lokasi Tegugat 2</option>
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
                                        <select class="js-example-basic-single" type="text" name="tergugat3">
                                            <option value="">Pilih Lokasi Tegugat 3</option>
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
                                        <select class="js-example-basic-single" type="text" name="tergugat4">
                                            <option value="">Pilih Lokasi Tegugat 4</option>
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
                                        <select class="js-example-basic-single" type="text" name="tergugat5">
                                            <option value="">Pilih Lokasi Tegugat 5</option>
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
                                        <select class="js-example-basic-single" type="text" name="tergugat6">
                                            <option value="">Pilih Lokasi Tegugat 6</option>
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

                                        <select class="js-example-basic-single" type="text" name="tergugat7">
                                            <option value="">Pilih Lokasi Tegugat 7</option>
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
                                        <select class="js-example-basic-single" type="text" name="tergugat8">
                                            <option value="">Pilih Lokasi Tegugat 8</option>
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
                                        <select class="js-example-basic-single" type="text" name="tergugat9">
                                            <option value="">Pilih Lokasi Tegugat 9</option>
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
                        <th>Gugatan</th>
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
                    <tr>
                        <td>Biaya Panggilan/ Pembritahuan/ PMH / WANPRESTASI (5x)</td>
                        <td><?php echo buatRupiah(@$jumlah2 + @$jumlah21 + @$jumlah31 + @$jumlah41 + @$jumlah51 + @$jumlah61 + @$jumlah71 + @$jumlah81 + @$jumlah91 + @$jumlah110 + @$jumlah111 + @$jumlah112 + @$jumlah113 + @$jumlah114 + @$jumlah115 + @$jumlah116 + @$jumlah117 + @$jumlah118 + @$jumlah119 + @$jumlah120); ?></td>

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
                        <td>PNBP Penggugat</td>
                        <td><?php echo buatRupiah(@$pnbp); ?></td>

                    </tr>
                    <tr>
                        <td>PNBP Tergugat</td>
                        <td><?php echo buatRupiah(@$pnbpx + @$pnbp02 + @$pnbp03 + @$pnbp04 + @$pnbp05 + @$pnbp06 + @$pnbp07 + @$pnbp08 + @$pnbp09 + @$pnbp10 + @$pnbp101 + @$pnbp102 + @$pnbp103 + @$pnbp104 + @$pnbp105 + @$pnbp106 + @$pnbp107 + @$pnbp108 + @$pnbp109 + @$pnbp120); ?></td>

                    </tr>

                    <tr>
                        <td>
                            <strong>JUMLAH<strong>
                        </td>
                        <td>
                            <strong><?php echo buatRupiah(@$jumlah2 + @$pendaftaran + @$biayaatk + @$meterai + @$redaksi + @$pnbp + @$jumlah21 + @$jumlah31 + @$jumlah41 + @$jumlah51 + @$jumlah61 + @$jumlah71 + @$jumlah81 + @$jumlah91 + @$jumlah110 + @$jumlah111 + @$jumlah112 + @$jumlah113 + @$jumlah114 + @$jumlah115 + @$jumlah116 + @$jumlah117 + @$jumlah118 + @$jumlah119 + @$jumlah120 + @$pnbpx + @$pnbp02 + @$pnbp03 + @$pnbp04 + @$pnbp05 + @$pnbp06 + @$pnbp07 + @$pnbp08 + @$pnbp09 + @$pnbp10 + @$pnbp101 + @$pnbp102 + @$pnbp103 + @$pnbp104 + @$pnbp105 + @$pnbp106 + @$pnbp107 + @$pnbp108 + @$pnbp109 + @$pnbp120); ?>
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