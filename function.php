<?php

//koneksi
$koneksi = mysqli_connect('localhost','root','','biayaperkara');

//dafter

if(isset($_POST['register'])){
    //jika tombol register di klik

    $username = $_POST ['username'];
    $password = $_POST ['password']; //tanpa enkripsi


    $epassword = password_hash($password,PASSWORD_DEFAULT);

    //insert to db
    $insert = mysqli_query($koneksi, "INSERT INTO user (username,password) values ('$username','$epassword')");

    if ($insert){ 
        //jika berhasil
        header('location:index.php'); //re direct ke halama login
    } else {
        //jika gagal

        echo '
        <script>
            alert("Registrasi Gagal");
            window.location.href="register.php";
        </script>';
       

    
         

    }
}

//login
if(isset($_POST['login'])){
    //jika tombol register di klik

    $username = $_POST ['username'];
    $password = $_POST ['password']; 
    //insert to db
    $cekdb = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    $hitung = mysqli_num_rows ($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $passwordsekarang = $pw['password'];

    if ($hitung>0){ 
        //jika berhasil
        if(password_verify($password,$passwordsekarang)){
            header('location:paneladmin/media.php');
        }else{
            header('location:');
        }
    }else{
        
        header('location:');
    }
       

    
         

    }


?>