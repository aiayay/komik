<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Paket</h2>
                    <h6 style="padding-top: 18px">Mari nikmati keseruan koleksi komik kebudayaan EnchantIndo Comics. Sambil rebahan atau sedang di jalan? Semua bisa!</h6>
                   
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="header-text">
                    <img src="assets/images/hero.jpeg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Banner End ***** -->

        

            <!-- ***** Start Stream Start ***** -->
            <div class="start-stream">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Pilihan</em> Paket</h4>
                </div>
                <div class="row">
                <a href="?page=komik/home/index">
                <?php
                               $paket = mysqli_query($koneksi, "SELECT * FROM paket ORDER BY id_paket ASC");
                                while($data= mysqli_fetch_array($paket)):
                            ?>
                  <div class="col-lg-3">
                    <div class="item">
                      <?php
                          if (isset($_SESSION['id_user'])):
                      ?> 
                          <div class="icon">
                              <a href="?page=paket/index&id_paket=<?php echo $data["id_paket"];?>"><img src="assets/images/logo2.jpg" alt="" style="max-width: 60px; border-radius: 50%" /></a>
                          </div>
                          <h4><a href="?page=paket/index&id_paket=<?php echo $data["id_paket"];?>"><?= $data['nama_paket']?></a></h4>
                      <?php else: ?>
                          <div class="icon">
                            <a href="?page=admin/login/index"><img src="assets/images/logo2.jpg" alt="" style="max-width: 60px; border-radius: 50%" /></a>
                          </div>
                          <h4><a href="?page=admin/login/index"><?= $data['nama_paket']?></a></h4>
                      <?php endif;?>
                          <p>Rp. <?= $data['harga']?></p>
                          <p><?= $data['deskripsi']?></p>
                    </div>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <!-- ***** Start Stream End ***** -->

           