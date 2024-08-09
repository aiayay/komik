<?php

session_start();
include '../koneksi.php';

if (isset($_POST['id_komik'])) {
    $id_komik = $_POST['id_komik'];
    


// Mengambil id_komik dari URL
// $id_komik = $_GET['id_komik'];

// Proses upload gambar
$namafile = $_FILES['gambar_komik']['name'];
$jml = count($namafile);

for ($i = 0; $i < $jml; $i++) {
    $b = $namafile[$i];
    $namaSementara = $_FILES['gambar_komik']['tmp_name'][$i];

    // Pindahkan file
    if (move_uploaded_file($namaSementara, '../assets/images/komik/' . $b)) {
        // Simpan data gambar ke tabel tbgambar
        $gambarQuery = "INSERT INTO tbgambar (id_komik, gambar_komik) VALUES ('$id_komik', '$b')";
        $gambarResult = mysqli_query($koneksi, $gambarQuery);

        if (!$gambarResult) {
            echo "<script>
            alert('data berhasil ditambah');
            window.location.href='../?page=komik/index';
            </script>";
            exit;
        }
    } else {
        echo "<script>
        alert('Gagal mengupload file');
        window.location.href='../?page=komik/index';
        </script>";
        exit;
    }
}

echo "<script>
alert('Gambar berhasil ditambahkan');
window.location.href='../?page=komik/index';
</script>";
}
?>