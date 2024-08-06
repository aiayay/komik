<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">DATA KOMIK</h2>
                    <h6 style="padding-top: 18px"><a href="?page=komik/tambah" class="btn btn-success">Tambah Data Komik</a></h6><br>
                    <table class="table table-striped custom-table" style="color: white;">
                              <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Cover Komik</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                $no =1;
                                $komik = mysqli_query($koneksi, "SELECT * FROM komik ORDER BY id_komik DESC");
                                while($item = mysqli_fetch_array($komik)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $item['judul']; ?></td>
                                        <td><?= $item['deskripsi']; ?></td> 
                                       
                                        <td><img src="assets/images/cover/<?=$item ['cover']?>" width="100"></td>
                                        <td>
                                        <a href="?page=komik/detail_komik&id_komik=<?= $item['id_komik']; ?>" class="btn btn-success">Lihat</a> 
                                        </td>                                  
                                        <td><a href="?page=komik/ubah&id_komik=<?php echo $item["id_komik"];?>" class="btn btn-success">Ubah</a><br><br>
                                            <a onclick="return confirm('yakin mau dihapus??')" href="komik/hapus.php?id_komik=<?php echo $item["id_komik"];?>" class="btn btn-danger">Hapus</a></td>
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

    
   