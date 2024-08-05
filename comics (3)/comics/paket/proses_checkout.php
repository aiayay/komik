<?php

session_start();
include '../koneksi.php';

$paketterpilih = $_POST['id_paketsaya'];
$id_user = $_SESSION['id_user'];
date_default_timezone_set('Asia/Jakarta');



$namafile = $_FILES['bukti_bayar']['name'];
$namaSementara = $_FILES['bukti_bayar']['tmp_name'];

$terupload = move_uploaded_file($namaSementara, '../admin/assets/images/bukti_bayar/' . $namafile);

// $paket = mysqli_query($koneksi, "SELECT hari FROM paket ORDER BY id_paket");

$keranjangdata = mysqli_query($koneksi,"SELECT * FROM keranjang 
                            JOIN komik ON komik.id_komik = keranjang.id_komik 
                            JOIN paket ON keranjang.id_paket=paket.id_paket 
                            where paket.id_paket= '$paketterpilih'");
// $id_paket= $
$row = mysqli_fetch_assoc($keranjangdata);
$date_awal = date('Y-m-d'); // date ini ambil hari ini ..
$hari = $row['hari']; 

// Hitung tanggal kembali dengan menambahkan hari
$date_kembali = date('Y-m-d', strtotime($date_awal . " + $hari days"));

// // Tampilkan hasil
// echo "Tanggal awal: " . $date_awal . "\n";
// echo "Tanggal setelah ditambahkan $hari hari: " . $date_kembali . "\n";


$pesanan = mysqli_query($koneksi, "INSERT INTO pesanan (id_user, tgl_pesanan, tgl_habis, bukti_bayar, status)
VALUES ('$id_user', '$date_awal','$date_kembali','$namafile','pending')");

// dapatkan nilai pesanan teratas
$pesanan_atas = mysqli_query($koneksi,"SELECT * FROM `pesanan` order by `id_pesanan` DESC");


$datapesanan = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 1");
$arrpesanan = mysqli_fetch_array($datapesanan);

$datakeranjang = mysqli_query($koneksi, "SELECT * FROM keranjang 
                                        join komik on keranjang.id_komik = komik.id_komik
                                        JOIN paket ON keranjang.id_paket=paket.id_paket where keranjang.id_user = '$id_user'");
$totalharga = 0;
while ($keranjang = mysqli_fetch_array($datakeranjang)){
    $detailpesanan = mysqli_query($koneksi, "INSERT INTO detail_pesanan (id_pesanan,id_paket, id_komik) VALUES ('$arrpesanan[id_pesanan]','$keranjang[id_paket]','$keranjang[id_komik]')");
}



$deletequery = mysqli_query($koneksi, "DELETE FROM keranjang where id_user ='$id_user'");
if ($deletequery){
    echo "<script>
    alert ('berhasil check out keranjang')
    window.location.href='../?page=home/index';
    </script>";
}else {
    echo "<script>
    alert ('gagal check out keranjang')
    window.location.href = '../?page=home/index';
    </script>";
}


?>








