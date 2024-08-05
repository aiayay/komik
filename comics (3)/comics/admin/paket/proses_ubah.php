<?php
include '../koneksi.php';

$id_paket =$_POST['id_paket'];
$nama_paket = $_POST['nama_paket'];
$deskripsi = $_POST ['deskripsi'];
$harga =$_POST['harga'];
$jumlah_komik = $_POST ['jumlah_komik'];

$update = mysqli_query($koneksi, "UPDATE paket SET nama_paket='$nama_paket', deskripsi='$deskripsi', harga='$harga', jumlah_komik='$jumlah_komik'
WHERE id_paket='$id_paket'");

if ($update){
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