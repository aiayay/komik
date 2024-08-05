<?php
include '../koneksi.php';

$nama_paket = $_POST['nama_paket'];
$deskripsi = $_POST ['deskripsi'];
$harga =$_POST['harga'];
$hari =$_POST['hari'];
$jumlah_komik = $_POST ['jumlah_komik'];

$tambah = mysqli_query($koneksi, "INSERT INTO paket (nama_paket, deskripsi, harga, hari, jumlah_komik) 
VALUES ('$nama_paket', '$deskripsi', '$harga', '$hari','$jumlah_komik')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=paket/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=paket/tambah'
        </script>";
    }

?>