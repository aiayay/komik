<?php



$getid = $_GET['id_paket'];

$search = mysqli_query($koneksi,"SELECT * FROM paket where id_paket ='$getid'");
$item = mysqli_fetch_array($search);

$batas_komik = $item['jumlah_komik'];
?>
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Daftar Komik</h2>
                    <h6 style="padding-top: 18px">Silahkan pilih komik (Maksimal <?= $batas_komik ?> komik)</h6>
                        <div class="most-popular">
                            <form action="paket/tambah_keranjang.php" method="post">
                            <input type="hidden" value="1" name="kuantitas">
                            <input type="hidden" name="id_paket" value="<?= $item['id_paket'] ?>">
                            <input type="hidden" name="max_komik" value="<?= $item['jumlah_komik'] ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                    <?php
                                            $komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC");
                                                while($data= mysqli_fetch_array($komik)):
                                            ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            
                                            <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik'];?>"><img class="img-fluid" src="admin/assets/images/cover/<?= $data['cover']?>" alt="" width="100px" height="100px"></a>
                                            <h4><?= $data['judul']; ?><br /><span><?= $data['nama_lengkap']?></span></h4>   
                                            <div class="heading-section">
                                            <input type="checkbox" name="id_komik[]" value="<?php echo $data['id_komik']; ?>">
                                              <h4>Pilih</h4>
                                      
                                            </div>
                                    
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <div class="col-lg-12">
                                      <div class="main-button">
                                        <button type="submit">lanjut Pembayaran</button>
                                      </div>
                                    </div>
                                </div>
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
    </div>

    
 