<?php
include '../koneksi.php';

$id_komik = $_GET['id_komik'];

$hapus = mysqli_query($koneksi, "DELETE FROM komik WHERE id_komik='$id_komik'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='../?page=komik/index';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='../?page=komik/index';
			</script>";
}
?>