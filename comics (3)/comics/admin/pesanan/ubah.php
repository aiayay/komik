<?php

$getid = $_GET['id_pesanan'];

$search = mysqli_query($koneksi,"SELECT * FROM pesanan 
join user on pesanan.id_user=user.id_user where id_pesanan ='$getid'");
$item = mysqli_fetch_array($search);

$id_user = $item['id_user'];

?>

<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Bukti Bayar</h2>
                    <h6 style="padding-top: 18px"><a href="?page=pesanan/index"></a></h6>
                    <form action="pesanan/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_pesanan" value="<?=$item['id_pesanan']?>">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                    <div class="col-lg-3 col-sm-6">
                                        <div class="item text-center">
                                        <img class="img-fluid" src="assets/images/bukti_bayar/<?=$item ['bukti_bayar']?>" alt="" width="100%" height="auto">
                                        </div>
                    </div>
                    <ul>
                    <h6 for="">Status Pesanan</h6>
                                        <select name="status" id="">
                                            <option value="pending" <?= $item['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                            <option value="diterima" <?= $item['status'] == 'diterima' ? 'selected' : '' ?>>Diterima</option>
                                            <option value="konfirmasi" <?= $item['status'] == 'konfirmasi' ? 'selected' : '' ?>>Konformasi</option>
                                            <option value="ditolak" <?= $item['status'] == 'ditolak' ? 'selected' : '' ?>>Ditolak</option>
                                        </select>
                        <!-- <li>
                      
                                                <h6 for="exampleInputPassword1">Foto</h6>
                                                <input type="file" name="gambar_pesanan[]" id="gambar_pesanan" multiple>
                                               
                                    
                        </li> -->
                        <li>
                          <br>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </li>
                      </ul>
                      <br>
                      
                  <table class="table table-striped custom-table" style="color: white;">
                              <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Cover Komik</th>
                                        <th>Nama Paket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                $query = "
                                  SELECT pesanan.id_pesanan, komik.*, paket.nama_paket, user.id_user
                                  FROM pesanan
                                  JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
                                  JOIN user ON pesanan.id_user = user.id_user
                                  JOIN paket ON detail_pesanan.id_paket = paket.id_paket
                                  JOIN komik ON detail_pesanan.id_komik = komik.id_komik
                                  WHERE pesanan.id_user = '$id_user'
                                      ORDER BY komik.id_komik ASC 
                                ";
                                $data_pesanan = mysqli_query($koneksi, $query);
                                while($data = mysqli_fetch_array($data_pesanan)){
                                ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $data['judul']; ?></td>
                                        <td><?= $data['deskripsi']; ?></td> 
                                        <td><img src="assets/images/cover/<?=$data ['cover']?>" width="100"></td>   
                                        <td><?= $data['nama_paket']; ?></td>                              
                                    </tr>
                                    <?php } ?>
                                </tbody>
                    </table>
                    
                    </div>
                  </div>
                </form>
                  </div>
                </div>
             
              </div>

          </div>
        </div>
      </div>
    </div>

    
   
    
   