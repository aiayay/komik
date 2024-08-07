<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h2 style="font-size: 27px">Sudah siapkah kamu berkelana menjelajahi kebudayaan Indonesia melalui visual yang menggemaskan?</h2>
                    <h6 style="padding-top: 18px">Mari nikmati keseruan koleksi komik kebudayaan EnchantIndo Comics. Sambil rebahan atau sedang di jalan? Semua bisa!</h6>
                   
                  </div>
                </div>
                <br>
                <div class="col-lg-5">
                  <div class="header-text">
                    <img src="assets/images/hero.jpeg" alt="" />
                  </div><br>
                </div>
                <?php
									      if (isset($_SESSION['id_user'])):
								    ?>
                    <?php else: ?>
                      <div class="main-button">
                      <a href="?page=admin/signup/index">Signup</a>
                    </div>
                    <?php endif;?>
              </div>
            </div>
            <!-- ***** Banner End ***** -->

            <!-- ***** Gaming Library Start ***** -->
            <div class="gaming-library">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>About</em> Us</h4>
                </div>
                <div class="item">
                  <h6 style="font-size: 24px">
                    EnchantIndo Comics merupakan komik digital yang mengangkat cerita-cerita kebudayaan lokal. Tersedia cerita dari berbagai jenis kebudayaan, seperti; makanan, pakaian adat, senjata di suatu daerah, dan lainnya. Adapun
                    genre yang dapat ditemukan adalah romantis, horor, misteri, dan lain-lain.
                  </h6>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="?page=home/contact">Contact Us</a>
                </div>
              </div>
            </div>
            <!-- ***** Gaming Library End ***** -->

            <!-- ***** Most Popular Start ***** -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4><em>Komik</em> Pilihan</h4>
                  </div>
                  <div class="row">
                            <?php
                               $komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC LIMIT 4");
                                while($data= mysqli_fetch_array($komik)):
                            ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik'];?>"><img class="img-fluid" src="admin/assets/images/cover/<?= $data['cover']?>" alt="" width="100px" height="100px"></a>
                                  <h4><?= $data['judul']; ?><br /><span><?= $data['nama_lengkap']?></span></h4>
                                </div>
                            </div>
                          <?php endwhile; ?>
                              <div class="col-lg-12">
                                <div class="main-button">
                                  <a href="?page=komik/home/index">Discover Comics</a>
                                </div>
                              </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Most Popular End ***** -->
          </div>
        </div>
      </div>
    </div>
