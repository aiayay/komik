<?php
include '../koneksi.php';

$id_gambar = $_POST['id_gambar'];

if($_FILES['gambar_komik']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['gambar_komik']['name'];
    $namaSementara= $_FILES['gambar_komik']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/komik/' . $namafile);
}


$update = mysqli_query($koneksi, "UPDATE tbgambar SET gambar_komik='$namafile' 
WHERE id_gambar='$id_gambar'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=komik/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=komik/index'
        </script>";
    }

?>