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
$level =$_POST['level'];


$password = password_hash($password, PASSWORD_DEFAULT);

$tambah = mysqli_query($koneksi, "INSERT INTO user (username, password, confirm_password, nama_lengkap, jenis_kelamin, no_hp, email, tgl_lahir, level) 
VALUES ('$username', '$password', '$confirm_password','$nama_lengkap', '$jenis_kelamin','$no_hp','$email','$tgl_lahir','$level')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=user/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=user/tambah'
        </script>";
    }

?>