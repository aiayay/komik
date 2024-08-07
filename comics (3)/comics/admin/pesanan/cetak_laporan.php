<?php
include '../koneksi.php';
    if(isset($_POST['cetak'])) {
        $cetak = $_POST['cetak'];
    } else {
        $cetak = "Data tidak ada";
    }

$tanggal_dari = isset($_SESSION['tanggal_dari']) ? $_SESSION['tanggal_dari'] : date('Y-m-d');
$tanggal_sampai = isset($_SESSION['tanggal_sampai']) ? $_SESSION['tanggal_sampai'] : date('Y-m-d');

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
        /* Untuk mengatur ukuran logo */
        #logo {
            width: 100px; /* Sesuaikan dengan ukuran logo Anda */
            height: auto;
            display: inline-block; /* agar elemen logo dan teks berdampingan */
            vertical-align: left; /* agar elemen logo dan teks berada di tengah vertikal */
        }
        #title {
            display: inline-block; /* agar elemen logo dan teks berdampingan */
            vertical-align: middle; /* agar elemen logo dan teks berada di tengah vertikal */
        }
        #footer {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            text-align: right;
            padding: 10px;
            background-color: #f2f2f2; /* Warna latar belakang footer */
        }
    </style>
</head>
<body>
    <center>
        <img id="logo" src="../asset/images/logo2.jpg" alt="Logo" align="left">
        <h2 id="title" align="center">EnchatIndo Comics</h2>
        <h5>Universitas Andalas</h5>
        <h5>Telp : (0751) 72001 / (0751) 71378 | Email : @yahoo.co.id</h5>
        <h2>Laporan Pesanan</h2>
        <h5>PERIODE : <?php echo date('d/m/Y', strtotime($tanggal_dari)); ?> s/d <?php echo date('d/m/Y', strtotime($tanggal_sampai)); ?></h5>
      



    </center>

   
    <table border="1" cellpadding="5" cellspacing="0" style="width:100%">
        <tr>
            <th width="1%">No</th>
                    <th>Nama User</th>
                    <th>Komik</th>
                    <th>Jenis Paket</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Habis</th>
                    <th>Bukti Bayar</th>
                    <th>Status</th>
                    
        </tr>
        <?php
       
            $tanggal_dari = isset($_SESSION['tanggal_dari']) ? $_SESSION['tanggal_dari'] : date('Y-m-d');
            $tanggal_sampai = isset($_SESSION['tanggal_sampai']) ? $_SESSION['tanggal_sampai'] : date('Y-m-d');

            // Query database sesuai dengan rentang tanggal

            $no = 1;

            $query = "
            SELECT pesanan.id_pesanan, user.nama_lengkap, komik.judul, paket.nama_paket, 
              pesanan.tgl_pesanan, pesanan.tgl_habis, pesanan.bukti_bayar, pesanan.status
            FROM pesanan
            JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
            JOIN user ON pesanan.id_user = user.id_user
            JOIN paket ON detail_pesanan.id_paket = paket.id_paket
            JOIN komik ON detail_pesanan.id_komik = komik.id_komik
            ORDER BY pesanan.id_pesanan DESC
          ";
        

        $data_pesanan = mysqli_query($koneksi, $query);

        while($data = mysqli_fetch_array($data_pesanan)){
            ?>
            <tr>
            <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($data['tgl_pesanan'])); ?></td>
                    <td><?php echo date("d/m/Y", strtotime($data['tgl_habis'])); ?></td>
                    <td><img src="../assets/images/bukti_bayar/<?=$data ['bukti_bayar']?>" width="100"></td>
                    <td><?php echo $data['status']; ?></td>
            </tr>
            </tr>
        <?php
        }
        // Check if $data['tgl'] is set before accessing it
    $tanggal = isset($data['tgl_pesanan']) ? date('d-m-Y', strtotime($data['tgl_pesanan'])) : date('d-m-Y');
        ?>
    </table>
    <br><br>
    <br><br>
        <table align="right">
            <tr>
                <td>Padang,</td>
                <td><?php echo $tanggal; ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;"></td>
            </tr>
            <br>
            <!--  -->
        </table>
    <script>
        window.print()
    </script>

</body>
</html>
