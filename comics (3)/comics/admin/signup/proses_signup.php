<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST ['password'];
$confirm_password=$_POST['confirm_password'];
$nama_lengkap = $_POST ['nama_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$no_hp =$_POST['no_hp'];
$email=$_POST['email'];
$tgl_lahir =$_POST['tgl_lahir'];
$level='member';


$password = password_hash($password, PASSWORD_DEFAULT);
$confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);
// cek apakah data yang diinputkan sudah sesuai database
$tambah = mysqli_query($koneksi, "INSERT INTO user (username, password, confirm_password, nama_lengkap, jenis_kelamin, no_hp, email, tgl_lahir, level) 
VALUES ('$username', '$password', '$confirm_password','$nama_lengkap', '$jenis_kelamin','$no_hp','$email','$tgl_lahir','$level')");


// cek jumlah data yang masuk dari query

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=login/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=signup/index'
        </script>";
    }

?>