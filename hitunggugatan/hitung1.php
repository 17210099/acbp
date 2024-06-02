<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'aplikasipanjar');

if(isset($_POST['hitung'])){

$penggugat    =$_POST['penggugat'];
$jumlah1 = 0;
$jumlah_1 = mysqli_query($koneksi,"SELECT * FROM biayagugatan WHERE id_rad = '$penggugat' ");     
     while ($tabelA = mysqli_fetch_array ($jumlah_1)) {
           $dataA =$tabelA ['radius'];
              {
              
            $jumlah1=$jumlah1+$dataA ;  

        
        }}


//echo "total jumlah adalah : " .$jumlah1;



    }

    if(isset($_POST['hitung'])){


        $tergugat=$_POST['tergugat'];
       
        $jumlah2 =0;
        $jumlah_2 = mysqli_query($koneksi,"SELECT * FROM biayagugatan WHERE id_rad = '$tergugat' ");     
             while ($tabelB = mysqli_fetch_array ($jumlah_2)) {
                   $dataB =$tabelB ['radius'];
                      {
                      
                    $jumlah2=$jumlah2+$dataB ;  
        
                
                }}
        
        
        //echo "total jumlah adalah : " .$jumlah2;
        
            }
        

?>


<!--- Input Wilayah ---->
<html>
    <head>
        <title>Tutorial Menghitung Total Bayar dengan Script PHP</title>
    </head>
    <body>
        <h3>Form Hitung Total Bayar</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>Penggugat</td>
                    <td>:</td>
                    <td><select type="text" name="penggugat">
                    <option value="0">SILAHKAN PILIH DAERAH PENGGUGAT</option>
                    <option value="2">REMBOKEN</option>
                    <option value="6">RATATOKTOK</option>
                    <option value="2">TOMOHON BARAT</option>
                    <option value="2">ERIS</option>
                    <option value="5">KAKAS BARAT</option>
                    <option value="3">KAWANGKOAN</option>
                    <option value="4">KAWANGKOAN BARAT</option>
                    <option value="4">KOMBI</option>
                    <option value="3">LANGOWAN BARAT</option>
                    <option value="5">LANGOWAN SELATAN</option>
                    <option value="3">LANGOWAN TIMUR</option>
                    <option value="3">SONDER</option>
                    <option value="4">TOMBARIRI (Sarani Matani,Borgo,Tambala,Ranowangko)</option>
                    <option value="4">TOMBARIRI TIMUR</option>\
                    <option value="3">TOMPASO</option>
                    <option value="1">TONDANO BARAT</option>
                    <option value="1">TONDANO SELATAN</option>
                    <option value="1">TONDANO TIMUR</option>
                    <option value="1">TONDANO UTARA</option>
                    <option value="3">KAKAS</option>
                    <option value="4">LEMBEAN</option>
                    <option value="4">LANGOWAN UTARA</option>
                    <option value="5">BELANG</option>
                    <option value="4">PASAN</option>
                    <option value="6">PUSOMAEN</option>
                    <option value="4">RATAHAN</option>
                    <option value="5">SILIAN RAYA</option>
                    <option value="5">TOMBATU</option>
                    <option value="5">TOULUAAN</option>
                    <option value="6">TOULUAAN SELATAN</option>
                    <option value="2">TOMOHON SELATAN</option>
                    <option value="2">TOMOHON TENGAH</option>
                    <option value="2">TOMOHON UTARA</option>
                    <option value="2">TOMOHON TIMUR</option>
                    <option value="5">TOMBARIRI (Mokupa,Senduk,Tanawangko)</option>
                    <option value="6">TOMBARIRI (Kumu,Poopoh,Teling,Pinasungkulan)</option>
                </tr>
                <tr>
                <td>Tergugat</td>
                    <td>:</td>
                    <td><select type="text" name="tergugat">
                    <option value="0">SILAHKAN PILIH DAERAH PENGGUGAT</option>
                    <option value="0">SILAHKAN PILIH DAERAH PENGGUGAT</option>
                    <option value="2">REMBOKEN</option>
                    <option value="6">RATATOKTOK</option>
                    <option value="2">TOMOHON BARAT</option>
                    <option value="2">ERIS</option>
                    <option value="5">KAKAS BARAT</option>
                    <option value="3">KAWANGKOAN</option>
                    <option value="4">KAWANGKOAN BARAT</option>
                    <option value="4">KOMBI</option>
                    <option value="3">LANGOWAN BARAT</option>
                    <option value="5">LANGOWAN SELATAN</option>
                    <option value="3">LANGOWAN TIMUR</option>
                    <option value="3">SONDER</option>
                    <option value="4">TOMBARIRI (Sarani Matani,Borgo,Tambala,Ranowangko)</option>
                    <option value="4">TOMBARIRI TIMUR</option>\
                    <option value="3">TOMPASO</option>
                    <option value="1">TONDANO BARAT</option>
                    <option value="1">TONDANO SELATAN</option>
                    <option value="1">TONDANO TIMUR</option>
                    <option value="1">TONDANO UTARA</option>
                    <option value="3">KAKAS</option>
                    <option value="4">LEMBEAN</option>
                    <option value="4">LANGOWAN UTARA</option>
                    <option value="5">BELANG</option>
                    <option value="4">PASAN</option>
                    <option value="6">PUSOMAEN</option>
                    <option value="4">RATAHAN</option>
                    <option value="5">SILIAN RAYA</option>
                    <option value="5">TOMBATU</option>
                    <option value="5">TOULUAAN</option>
                    <option value="6">TOULUAAN SELATAN</option>
                    <option value="2">TOMOHON SELATAN</option>
                    <option value="2">TOMOHON TENGAH</option>
                    <option value="2">TOMOHON UTARA</option>
                    <option value="2">TOMOHON TIMUR</option>
                    <option value="5">TOMBARIRI (Mokupa,Senduk,Tanawangko)</option>
                    <option value="6">TOMBARIRI (Kumu,Poopoh,Teling,Pinasungkulan)</option>
                </tr>
             
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        
                       <input type="submit" href="tabel.php" name="hitung" value="Hitung">
            
                    </td>
                </tr>
            </table>
        </form>
        <hr />


    </body>
    </html>


</html>







