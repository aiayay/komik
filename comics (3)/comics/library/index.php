
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Daftar Komik Saya</h2>
                    <h6 style="padding-top: 18px"></h6>
                        <div class="most-popular">
                          
                        <div class="row">
                          <?php
                                $pesanan = mysqli_query($koneksi, "
                                    SELECT pesanan.id_pesanan, user.nama_lengkap, paket.nama_paket, 
                                        pesanan.tgl_pesanan, pesanan.tgl_habis, pesanan.bukti_bayar, pesanan.status, komik.*
                                    FROM pesanan
                                    JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
                                    JOIN user ON pesanan.id_user = user.id_user
                                    JOIN paket ON detail_pesanan.id_paket = paket.id_paket
                                    JOIN komik ON detail_pesanan.id_komik = komik.id_komik WHERE status = 'diterima'
                                    ORDER BY pesanan.id_pesanan DESC
                                ");

                                while($item = mysqli_fetch_array($pesanan)):
                                
                                    ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            
                                            <a href="?page=library/content&id_komik=<?php echo $item['id_komik'];?>"><img class="img-fluid" src="admin/assets/images/cover/<?= $item['cover']?>" alt="" width="100px" height="100px"></a>
                                            <h4><?= $item['judul']; ?><br /><span><?= $item['nama_lengkap']?></span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>                                        
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                        </div>                
                            
                        </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    
   