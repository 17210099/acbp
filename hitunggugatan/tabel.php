<?php
					// Load file koneksi.php
					include "hitung1.php";
					
					?>




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

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

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

<h1>Tabel</h1>
<form method="post" action="hitung1.php">	
<table id="customers">
  <tr>
    <th>Gugatan</th>
    <th>Biaya</th>
  </tr>
  <tr>
    <td>Pendaftaran</td>
    <td>#</td>
  </tr>
  <tr>
    <td>Proese/ATK</td>
    <td>#</td>
  </tr>
  <tr>
    <td>Panggilan Penggugat (2x)</td>
    <td><?php echo @$jumlah1 ?></td>
  </tr>
    <tr>
    <td>Panggilan Tergugat (4x)</td>
    <td><?php echo @$jumlah2; ?></td>
  </tr>
  <tr>
    <td>Meterai</td>
    <td>#</td>
  </tr>
  <tr>
    <td>Redaksi</td>
    <td>#</td>
  </tr>
  <tr>
      <td>PNBP (4x)</td>
    <td>#</td>
  <tr>
    <tr>
    <td>Pembritahuan Keputusan</td>
    <td>#</td>
  </tr>
      <tr>
    <td>"JUMLAH"</td>
    <td><?php echo @$jumlah1 + @$jumlah2; ?></td>
  </tr>
  
</table>

</body>
</html>


