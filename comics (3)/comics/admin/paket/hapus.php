<?php
include '../koneksi.php';

$id_paket = $_GET['id_paket'];

$hapus = mysqli_query($koneksi, "DELETE FROM paket WHERE id_paket='$id_paket'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=paket/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=paket/index';
			</script>";
}
?>