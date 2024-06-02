<?php
$con = mysqli_connect ("localhost","root","","test2");
if ($con){
    echo "Berhasil Koneksi";
}else{
    echo"Gagal Koneksi";
}

?>