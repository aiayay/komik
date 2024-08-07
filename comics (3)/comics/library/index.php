<?php

$id_user = $_SESSION['id_user'];
?>





<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                  <h2 style="font-size: 36px" class="text-center">Daftar Komik Saya</h2>
                    <h6 style="padding-top: 18px" class="text-center">Komik Kebudayaan EnchantIndo Comics</h6>
                  </div>
                </div>
                <?php
                                $pesanan = mysqli_query($koneksi, "
                                    SELECT pesanan.id_pesanan, user.nama_lengkap, paket.nama_paket, 
                                        pesanan.tgl_pesanan, pesanan.tgl_habis, pesanan.bukti_bayar, pesanan.status, komik.*
                                    FROM pesanan
                                    JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
                                    JOIN user ON pesanan.id_user = user.id_user
                                    JOIN paket ON detail_pesanan.id_paket = paket.id_paket
                                    JOIN komik ON detail_pesanan.id_komik = komik.id_komik 
                                    WHERE pesanan.id_user = '$id_user' AND pesanan.status = 'diterima'
                                    ORDER BY komik.id_komik DESC
                                ");

                                while($item = mysqli_fetch_array($pesanan)):
                                
                                    ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            
                                            <a href="?page=library/content&id_komik=<?php echo $item['id_komik'];?>"><img class="img-fluid" src="admin/assets/images/cover/<?= $item['cover']?>" alt="" width="100px" height="100px"></a>
                                            <h6 class="text-center"><?= $item['judul']; ?><br /><span><?= $item['nama_lengkap']?></span></h6>                                       
                                        </div>
                                    </div>
                                <?php endwhile; ?>
              </div>
            </div>
            <!-- ***** Banner End ***** -->
          </div>
        </div>
      </div>
    </div>


    
   