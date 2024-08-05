<?php
session_start();
include '../koneksi.php';

if(!isset($_SESSION['id_user'])){
    echo "<script>
    alert('SILAHKAN LOGIN DULU');
    window.location.href='../../admin/login/index.php';
    </script>";
}

$id_user = $_SESSION['id_user'];
$id_paket =$_POST['id_paket'];
$id_komik = $_POST['id_komik'];
$kuantitas = $_POST['kuantitas'];
$max_komik = $_POST['max_komik'];

// Pastikan $id_komik adalah array
if(is_array($id_komik)){
    if(count($id_komik) > $max_komik){
        echo "<script>
        alert('Anda hanya bisa memilih maksimal $max_komik komik sesuai paket yang dipilih');
        window.location.href='../?page=paket/home/index';
        </script>";
    } else {
    foreach($id_komik as $komik_id){
        $tambah = mysqli_query($koneksi, "INSERT INTO keranjang (id_user,id_komik, id_paket,kuantitas) VALUES ('$id_user','$komik_id', '$id_paket','$kuantitas')");
    }

    if ($tambah){
        echo "<script>
        alert('Data berhasil ditambahkan');
        window.location.href='../?page=paket/checkout&id_paket=$id_paket';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan');
        window.location.href='../?page=paket/index';
        </script>";
    }
}
} else {
    echo "<script>
    alert('Tidak ada komik yang dipilih');
    window.location.href='../?page=komik/daftar';
    </script>";
}



?>
