<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">DATA PAKET</h2>
                    <h6 style="padding-top: 18px"><a href="?page=paket/tambah" class="btn btn-success">Tambah Data Paket</a></h6>
                    <br>
                    <table class="table table-striped custom-table" style="color: white;">
                              <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Jumlah Hari</th>
                                        <th>Jumlah Komik</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        $no =1;
                                        $paket = mysqli_query($koneksi, "SELECT * FROM paket ORDER BY id_paket DESC");
                                        while($item = mysqli_fetch_array($paket)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $item['nama_paket']; ?></td>
                                        <td><?= $item['deskripsi']; ?></td>                                        
                                        <td><?= $item['harga']?></td>
                                        <td><?= $item['hari']?></td>
                                        <td><?= $item['jumlah_komik']?></td>
                                        <td><a href="?page=paket/ubah&id_paket=<?php echo $item["id_paket"];?>" class="btn btn-success">Ubah</a><br><br>
                                            <a onclick="return confirm('yakin mau dihapus??')" href="paket/hapus.php?id_paket=<?php echo $item["id_paket"];?>" class="btn btn-danger">Hapus</a></td>
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

    
   