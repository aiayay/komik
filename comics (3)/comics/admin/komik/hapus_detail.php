<?php
include '../koneksi.php';

$id_gambar = $_GET['id_gambar'];

$hapus = mysqli_query($koneksi, "DELETE FROM tbgambar WHERE id_gambar='$id_gambar'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=komik/detail_komik';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=komik/detail_komik';
			</script>";
}
?>