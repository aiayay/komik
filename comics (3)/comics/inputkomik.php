<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

// Simpan data ke tabel komik
$komik = "INSERT INTO komik (judul, deskripsi) VALUES ('$judul', '$deskripsi')";
$hasil = mysqli_query($koneksi, $komik);

if ($hasil) {
    // Ambil id_komik yang baru saja dimasukkan
    $id_komik = mysqli_insert_id($koneksi);

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
                alert('Gagal menambahkan gambar ke database');
                window.location.href='../?page=komik/tambah';
                </script>";
                exit;
            }
        } else {
            echo "<script>
            alert('Gagal mengupload file');
            window.location.href='../?page=komik/tambah';
            </script>";
            exit;
        }
    }

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
?>
