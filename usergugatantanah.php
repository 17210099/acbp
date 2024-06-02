<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/menutengah.css">
  <link rel="stylesheet" href="assets/css/tombolcek.css">
  <link rel="stylesheet" href="assets/css/tambahcss.css">

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
        <a href="contactus.php" class="nav__logo">CONTACT US</a>
      </div>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">

          <li class="nav__item"><a href="menuhalaman.php" class="nav__link">AYO CEK BIAYA PERKARA</a></li>
          <li class="nav__item"><a href="https://drive.google.com/file/d/1IDyOIp65BC_29puqE0U9aYFKZLmrPyh6/view" class="nav__link">SK BIAYA PERKARA PN TONDANO 2021</a></li>
          <li class="nav__item"><a href="https://www.pn-tondano.go.id" class="nav__link">PN TONDANO</a></li>
          <li class="nav__item"><a href="login/login.php" class="nav__link">ADMIN</a></li>
        </ul>
      </div>

      <div class="nav__toggle" id="nav-toggle">
        <i class='bx bx-menu'></i>
      </div>
    </nav>
  </header>

  <main class="l-main">

    <br>
    <br>
    <!----Menu ---->

    <?php
    // fungsi buatRupiah
    function buatRupiah($angka)
    {
      $hasil = "Rp " . number_format($angka, 0, ',', '.');
      return $hasil;
    }
    ?>



    <?php


    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "aplikasipanjar";

    $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));


    //jika tombol simpan diklik

    if (isset($_POST['bsimpan'])) {
      //Pengujian Apakah data akan diedit atau disimpan baru
      if ($_GET['hal'] == "edit") {
        //Data akan di edit
        $edit = mysqli_query($koneksi, "UPDATE hitung SET
  pntondano = '$_POST[tpntondano]',
  biayapntondano = '$_POST[tbiayapntondano]',
  pnluar = '$_POST[tpnluar]',
  biayaluar = '$_POST[tbiayaluar]'
  
WHERE id = '$_GET[id]'
");
        if ($edit) //jika edit sukses
        {

          echo "<script>
        alert('Edit data suksess!');
        document.location='usergugatantanah.php';
       </script>";
        } else {
          echo "<script>
        alert('Edit data GAGAL!!');
        document.location='usergugatantanah.php';
       </script>";
        }
      } else {
        //Data akan disimpan Baru
        $simpan = mysqli_query($koneksi, "INSERT INTO hitung (pntondano, biayapntondano, pnluar, biayaluar)
                  VALUES ('$_POST[tpntondano]',
                      '$_POST[tbiayapntondano]',  
                      '$_POST[tpnluar]', 
                       '$_POST[tbiayaluar]')
                 ");
        if ($simpan) //jika simpan sukses
        {
          echo "<script>
        alert('Simpan data suksess!');
        document.location='usergugatantanah.php';
       </script>";
        } else {
          echo "<script>
        alert('Simpan data GAGAL!!');
        document.location='usergugatantanah.php';
       </script>";
        }
      }
    }

    //Pengujian jika tombol Edit / Hapus di klik
    if (isset($_GET['hal'])) {
      //Pengujian jika edit Data
      if ($_GET['hal'] == "edit") {
        //Tampilkan Data yang akan diedit
        $tampil = mysqli_query($koneksi, "SELECT * FROM hitung WHERE id = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
          //Jika data ditemukan, maka data ditampung ke dalam variabel
          $vpntondano = $data['pntondano'];
          $vbiayapntondano = $data['biayapntondano'];
          $vpnluar = $data['pnluar'];
          $vbiayaluar = $data['biayaluar'];
        }
      } else if ($_GET['hal'] == "hapus") {
        //Persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM hitung WHERE id = '$_GET[id]' ");
        if ($hapus) {
          echo "<script>
          alert('Hapus Data Suksess!!');
          document.location='usergugatantanah.php';
           </script>";
        }
      }
    }


    ?>

    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">BIAYA UMUM</div>
        <div class="panel-body">

          <!-----TABEL ---->
          <!DOCTYPE html>
          <html>

          <head>
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
            </style>
          </head>

          <body>

            <!DOCTYPE html>
            <html>

            <head>
              <title>CRUD 2020 PHP & MySQL + Bootstrap 4</title>
              <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="css/styles.css">
            </head>

            <body>
              <div class="container">



                <!-- Awal Card Form -->


                <!-- Akhir Card Form -->

                <!-- Awal Card Tabel -->

                <h3>DATA WILAYAH</h3>
              </div>
              <div class="card-body">

                <table id="customers">
                  <tr>
                    <th>No.</th>
                    <th>PN Tondano</th>
                    <th>Biaya</th>
                    <th>PN Luar</th>
                    <th>Biaya</th>
                    <th>Aksi</th>

                  </tr>
                  <?php
                  $no = 1;
                  $tampil = mysqli_query($koneksi, "SELECT * from hitung order by id desc");
                  while ($data = mysqli_fetch_array($tampil)) :

                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['pntondano'] ?></td>
                      <td><?= $data['biayapntondano'] ?></td>
                      <td><?= $data['pnluar'] ?></td>
                      <td><?= $data['biayaluar'] ?></td>

                      <td>
                        <a href="usergugatantanah.php?hal=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                      </td>
                    </tr>
                  <?php endwhile; //penutup perulangan while 
                  ?>
                </table>

              </div>
        </div>
        <!-- Akhir Card Tabel -->

      </div>

      <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>

<form method="post" action="">
  <table id="customers">
    <tr>
      <th>Gugatan</th>
      <th>Biaya</th>
    </tr>
    <tr>
      <td>Pendaftaran</td>
      <td><?php echo buatRupiah(30000) ?></td>
    </tr>
    <tr>
      <td>Proses/ATK</td>
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
      <td>PNBP (4x)</td>
      <td><?php echo buatRupiah(40000); ?></td>
    <tr>
    <tr>
      </div>



  </table>





  </div>
  </div>
  </div>
  </div>
  </div>
  </div>




  <html lang="en">

  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>

  <body>
    <br>

    <!-- membuat form  -->
    <!-- gunakan tanda [] untuk menampung array  -->

    <!---<button name="hitung" class="btn btn-success" type="submit">Submit</button>
        </form>---->




    <!-- class hide membuat form disembunyikan  -->
    <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->



    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">TERGUGAT</div>
        <div class="panel-body">
          <!-- membuat form  -->
          <!-- gunakan tanda [] untuk menampung array  -->
          <form action="" method="POST">
            <div class="control-group after-add-moree">
              <label>TERGUGAT</label>
              </select>
              <br>
              <button class="btn btn-success add-moree" type="button">
                <i class="glyphicon glyphicon-plus"></i> CEK BIAYA
              </button>

              <hr>
            </div>
            <button class="btn btn-success add-moree" id="add " type="button">
              <i class="glyphicon glyphicon-plus"></i> TAMBAH TERGUGAT
            </button>
            <br>
            <button class="btn btn-success" name="bsimpan">Submit</button>
        </div>
</form>


<!-- class hide membuat form disembunyikan  -->
<!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
<div class="copyy hide">
  <div class="control-group">
    <div class="card-body">
      <form method="post" action="">
        <div class="form-group">
          <label>PN TONDANO</label>
          <input type="text" name="tpntondano" value="<?= @$vid ?>" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label>Biaya</label>
          <input type="text" name="tbiayapntondano" value="<?= @$vkabupaten ?>" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label>PN Luar</label>
          <input type="text" name="tpnluar" value="<?= @$vnama ?>" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
          <label>Biaya</label>
          <input type="text" name="tbiayaluar" value="<?= @$vnama ?>" class="form-control" placeholder="" required>

        </div>
      </form>
      </script>
      <script>
        /* Dengan Rupiah */
        var dengan_rupiah = document.getElementById('txt33');
        dengan_rupiah.addEventListener('keyup', function(e) {
          dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
          var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

          if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
          }

          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
      </script>

      <br>
      <button class="btn btn-danger removee" type="button"><i class="glyphicon glyphicon-removee"></i> Remove</button>
      <hr>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script type="text/javascript">
  $(document).ready(function() {
    $(".add-moree").click(function() {
      var html = $(".copyy").html();
      $(".after-add-moree").after(html);
    });

    // saat tombol remove dklik control group akan dihapus 
    $("body").on("click", ".removee", function() {
      $(this).parents(".control-group").remove();
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    $('#add').click(function() {
      addnewrow();
    });


    $('body').delegate('.remove', 'click', function() {
      $(this).parent().parent().remove();
    });


    $('body').delegate('.quantity,.price', 'keyup', function() {
      var tr = $(this).parent().parent();
      var qty = tr.find('.quantity').val();
      var price = tr.find('.price').val();
      var amt = qty * price;

      tr.find('.amount').val(amt);
      total();
    });

  });

  function total() {
    var t = 0;
    $('.amount').each(function(i, e) {
      var amt = $(this).val() - 0;
      t += amt;
    });
    $('.total').val(t);
  }

  function addnewrow() {

    var n = ($('.detail tr').length - 0) + 1;
    var tr = '<tr>' +
      '<td class="no">' + n + '</td>' +
      '<td><input type="text" name="flagstat[]"  value="1"  hidden="true"  /> <input type="text" name="txtidmasdet[]"  value="<?php echo $ponumber ?>"  hidden="true"  /><input type="text" maxlength="70"  name="txtdesc[]"  placeholder="Description" size="24" class="form-control txtdesc" /></td>' + '<td><input type="text" maxlength="70"  name="txtspecs[]"  placeholder="Specs" size="30" class="form-control txtspecs" /></td>' + '<td><input maxlength="6" id="txtqty"  name="txtqty[]" type="text" placeholder="0" size="7"></td>' +
      '<td><input maxlength="14"  name="txtprice[]" type="text" placeholder="0.00" size="30"> </td>' +
      '<td><input  maxlength="70"   name="txtamount[]"  placeholder="0.00"  size="35"  class="form-control amount" readonly="readonly"/></td>' + '<td>  <button class="remove"><img src="<?php echo base_url('asset/images/delete.png'); ?>" /></button></td>' +
      '</tr>';

    $('.detail').append(tr);
  }
</script>
<!---HITUNGAN--->


<br>
<br>
<br>
<br>
<br>
<br>
<!--===== FOOTER =====-->
<footer class="footer">
  <p class="footer__title">
  <h3>MEDIA INFORMASI LAINNYA</h3>
  <div class="footer__social">
    <a href="https://facebook.com/pengadilannegeritondano" class="footer__icon"><i class='bx bxl-facebook'></i></a>
    <a href="https://www.instagram.com/pntondano" class="footer__icon"><i class='bx bxl-instagram'></i></a>
    <a href="https://www.twitter.com/pntondano" class="footer__icon"><i class='bx bxl-twitter'></i></a>
    <a href="#" class="footer__icon"><i class='bx bxl-whatsapp'></i></a>
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