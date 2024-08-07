<?php

$id_user = $_SESSION['id_user'];
?>





<div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="page-content">
            <!-- ***** Banner Start ***** -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="main-profile">
                    <div class="row">
                      <div class="col-lg-4">
                     
                        </div>
                          <div class="col-lg-10 align-self-center">
                            <div class="main-info header-text">
                           
                              <h4>Daftar Komik Saya</h4>
                              <p>Sudah siapkah kamu berkelana menjelajahi kebudayaan Indonesia melalui visual yang menggemaskan?
                              Mari nikmati keseruan koleksi komik kebudayaan EnchantIndo Comics, di mana dan kapan pun!</p>
                          
                           </div>
                        </div>
                       
                    </div>
            <!-- ***** Most Popular Start ***** -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
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
                                  <h4><?= $item['judul']; ?><br /><span><?= $item['nama_lengkap']?></span></h4>
                                </div>
                            </div>
                          <?php endwhile; ?>                       
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Most Popular End ***** -->
                       

                      
                    </div>
                  </div>
                </div>
              </div>
    </div>
        </div>
      </div>
    </div>


    
   