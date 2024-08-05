<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

// ambil data file
$namafile = $_FILES['gambar_komik']['name'];
$jml = count($namafile);

for ($i = 0; $i < $jml; $i++) {
    $b = $namafile[$i];
    $namaSementara = $_FILES['gambar_komik']['tmp_name'][$i];
    
    // pindahkan file
    if (move_uploaded_file($namaSementara, '../assets/images/komik/' . $b)) {
        // tambahkan data ke database
        $tambah = mysqli_query($koneksi, "INSERT INTO komik (judul, deskripsi, gambar_komik) VALUES ('$judul', '$deskripsi', '$b')");

        if ($tambah) {
            echo "<script>
            alert('Data berhasil ditambahkan');
            window.location.href='../?page=komik/index';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal ditambahkan');
            window.location.href='../?page=komik/tambah';
            </script>";
        }
    } else {
        echo "<script>
        alert('Gagal mengupload file');
        window.location.href='../?page=komik/tambah';
        </script>";
    }
}
?>
