<?php
include '../koneksi.php';

$id_komik = $_POST['id_komik'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

$deskripsi = mysqli_real_escape_string($koneksi, $deskripsi);

if($_FILES['cover']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['cover']['name'];
    $namaSementara= $_FILES['cover']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/cover/' . $namafile);
}





$update = mysqli_query($koneksi, "UPDATE komik SET judul='$judul', deskripsi='$deskripsi', cover='$namafile' 
WHERE id_komik='$id_komik'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='../?page=komik/index'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='../?page=komik/ubah'
        </script>";
    }

?>