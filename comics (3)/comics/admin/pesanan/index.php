<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-text">
              <h2 style="font-size: 36px">DATA PESANAN</h2>
              
                <form method="post" action="">
                  <h6 for="tanggal_dari">Dari Tanggal:</h6>
                    <input type="date" id="tanggal_dari" name="tanggal_dari">
                  <h6 for="tanggal_sampai">Sampai Tanggal:</h6>
                    <input type="date" id="tanggal_sampai" name="tanggal_sampai"><br>
                    <input type="submit" value="Filter" name="filter">
                </form>
              <form method="POST" action="pesanan/cetak_laporan.php" target="_blank">
                <input type="hidden" name="tanggal_dari" value="<?php echo $_GET['tanggal_dari'] ?? ''; ?>">
                <input type="hidden" name="tanggal_sampai" value="<?php echo $_GET['tanggal_sampai'] ?? ''; ?>">
                
                <h6 style="padding-top: 18px"><input type="submit" class="btn btn-success" value="Cetak"></h6>
                
                <!-- <input type="submit" class="btn btn-primary" value="Cetak"> -->
              </form>
              <br>
              <table class="table table-striped custom-table" style="color: white;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Habis</th>
                    <!-- <th>Bukti Bayar</th> -->
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'koneksi.php'; // Menyertakan file koneksi database

                  $no = 1;
                  if(isset($_POST['filter'])) {
                    $tanggal_dari = mysqli_real_escape_string($koneksi, $_POST['tanggal_dari']);
                    $tanggal_sampai = mysqli_real_escape_string($koneksi, $_POST['tanggal_sampai']);
                    // $_SESSION['tanggal_dari'] = $_GET['tanggal_dari'];
                    // $_SESSION['tanggal_sampai'] = $_GET['tanggal_sampai'];
                    // $tanggal_dari = $_SESSION['tanggal_dari'];
                    // $tanggal_sampai = $_SESSION['tanggal_sampai'];

                    $query = "SELECT * FROM pesanan JOIN user ON pesanan.id_user=user.id_user WHERE tgl_pesanan BETWEEN '$tanggal_dari' and '$tanggal_sampai'  ORDER BY id_pesanan DESC";

                    // $query = "
                    //   SELECT pesanan.*, user.nama_lengkap, paket.nama_paket, user.id_user
                    //   FROM pesanan
                    //   JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
                    //   JOIN user ON pesanan.id_user = user.id_user
                    //   JOIN paket ON detail_pesanan.id_paket = paket.id_paket
                    //   WHERE pesanan.tgl_pesanan BETWEEN '$tanggal_dari' AND '$tanggal_sampai'
                    //   ORDER BY pesanan.id_pesanan DESC 
                    // ";

                  } else {
                    $query = "SELECT * FROM pesanan JOIN user ON pesanan.id_user=user.id_user ORDER BY id_pesanan DESC";
                    // while($data= mysqli_fetch_array($komik)):
                    // $query = "
                    //   SELECT pesanan.*, user.nama_lengkap, paket.nama_paket,user.id_user
                    //   FROM pesanan
                    //   JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
                    //   JOIN user ON pesanan.id_user = user.id_user
                    //   JOIN paket ON detail_pesanan.id_paket = paket.id_paket
                    //   ORDER BY pesanan.id_pesanan DESC
                    // ";
                  }

                  $data_pesanan = mysqli_query($koneksi, $query);

                  while($item = mysqli_fetch_array($data_pesanan)){
                  ?>
                  <tr>
                    <td><?=  $no++; ?></td>
                    <td><?= $item['nama_lengkap']; ?></td>
                    <td><?= $item['tgl_pesanan']?></td>
                    <td><?= $item['tgl_habis']?></td>
                    <!-- <td><img src="assets/images/bukti_bayar/<?=$item ['bukti_bayar']?>" width="100"></td> -->
                    <td><?= $item['status']?></td>
                    <td>
                      <a href="?page=pesanan/ubah&id_pesanan=<?php echo $item['id_pesanan'];?>" class="btn btn-success">Detail</a><br><br>
                      <a onclick="return confirm('yakin mau dihapus??')" href="pesanan/hapus.php?id_pesanan=<?php echo $item['id_pesanan'];?>" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- JOIN komik ON detail_pesanan.id_komik = komik.id_komik -->