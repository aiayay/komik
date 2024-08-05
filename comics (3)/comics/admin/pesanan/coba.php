<?php
include '../koneksi.php'; // Menyertakan file koneksi database

$tanggal_dari = isset($_POST['tanggal_dari']) ? $_POST['tanggal_dari'] : date('Y-m-d');
$tanggal_sampai = isset($_POST['tanggal_sampai']) ? $_POST['tanggal_sampai'] : date('Y-m-d');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Laporan Pesanan</title>
    <style>
        h5 {
            margin: 0;
            padding: 0;
        }
        #logo {
            width: 100px;
            height: auto;
            display: inline-block;
            vertical-align: left;
        }
        #title {
            display: inline-block;
            vertical-align: middle;
        }
        #footer {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            text-align: right;
            padding: 10px;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <center>
        <img id="logo" src="" alt="Logo" align="left">
        <h2 id="title" align="center">EnchatIndo Comics</h2>
        <h5>Universitas Andalas</h5>
        <h5>Telp : (0751) 72001 / (0751) 71378 | Email : @yahoo.co.id</h5>
        <h2>Laporan Pesanan</h2>
        <h5>PERIODE : <?php echo date('d/m/Y', strtotime($tanggal_dari)); ?> s/d <?php echo date('d/m/Y', strtotime($tanggal_sampai)); ?></h5>
    </center>
    <table border="1" cellpadding="5" cellspacing="0" style="width:100%">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Komik</th>
            <th>Jenis Paket</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Habis</th>
            <th>Bukti Bayar</th>
            <th>Status</th>
        </tr>
        <?php
        $no = 1;
        $query = "
            SELECT pesanan.id_pesanan, user.nama_lengkap, komik.judul, paket.nama_paket, 
                pesanan.tgl_pesanan, pesanan.tgl_habis, pesanan.bukti_bayar, pesanan.status
            FROM pesanan
            JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
            JOIN user ON pesanan.id_user = user.id_user
            JOIN paket ON detail_pesanan.id_paket = paket.id_paket
            JOIN komik ON detail_pesanan.id_komik = komik.id_komik
            WHERE pesanan.tgl_pesanan BETWEEN '$tanggal_dari' AND '$tanggal_sampai'
        ";
        $data_pesanan = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($data_pesanan)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['nama_paket']; ?></td>
            <td><?php echo date("d/m/Y", strtotime($data['tgl_pesanan'])); ?></td>
            <td><?php echo date("d/m/Y", strtotime($data['tgl_habis'])); ?></td>
            <td><?php echo $data['bukti_bayar']; ?></td>
            <td><?php echo $data['status']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br><br>
    <table align="right">
        <tr>
            <td>Padang,</td>
            <td><?php echo date('d-m-Y'); ?></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;"></td>
        </tr>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
