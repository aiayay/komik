<?php
include '../koneksi.php';

$id_pesanan = $_POST['id_pesanan'];
$status = $_POST['status'];



$update = mysqli_query($koneksi, "UPDATE pesanan SET status='$status' WHERE id_pesanan='$id_pesanan'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=pesanan/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=pesanan/ubah'
        </script>";
    }

?>