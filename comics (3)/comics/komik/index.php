<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
            <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h2 style="font-size: 25px">Sudah siapkah kamu berkelana menjelajahi kebudayaan Indonesia melalui visual yang menggemaskan?</h2>
                    <h6 style="padding-top: 18px">Mari nikmati keseruan koleksi komik kebudayaan EnchantIndo Comics. Sambil rebahan atau sedang di jalan? Semua bisa!</h6>
                   
                  </div>
                </div>
                <br>
                <div class="col-lg-5">
                  <div class="header-text">
                    <img src="assets/images/hero.jpeg" alt="" />
                  </div><br>
                </div>

              </div>
            </div>
            <!-- ***** Banner End ***** -->
             
            <!-- ***** Most Popular Start ***** -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <!-- ***** Featured Games Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="featured-games header-text">
                            <div class="heading-section">
                              <h4><em>Komik</em> Terbaru</h4>
                            </div>
                            <div class="owl-features owl-carousel">
                            <?php
                                          $komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC LIMIT 4");
                                            while($data= mysqli_fetch_array($komik)):
                                        ?>
                              <div class="item">
                                <div class="thumb">
                                  <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik']; ?>"><img src="admin/assets/images/cover/<?= $data['cover'] ?>" alt=""></a>
                                  <div class="hover-effect">
                                    <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik']; ?>"><h6><?= substr($data['deskripsi'], 0, 60); ?>...</h6></a>
                                  </div>
                                </div>
                                    <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik']; ?>"><h4><?= $data['judul']; ?><br><span><?= $data['nama_lengkap']?></span></h4></a>
                              </div>
                              <?php endwhile; ?>
                            </div>
                          </div>
                        </div>
                      
                      </div>
          <!-- ***** Featured Games End ***** -->
                </div>
              </div>
            </div>
            <!-- ***** Most Popular End ***** -->
          </div>
        </div>
      </div>
    </div>

    
            <!-- ***** Gaming Library Start ***** -->
       <div class="gaming-library profile-library">
    <div class="container">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Koleksi</em> Pilihan</h4>
        </div>
        <div class="item row">
          <?php
          $komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC");
          while ($data = mysqli_fetch_array($komik)) :
          ?>
          <div class="col-md-4 mb-4"> <!-- Kelas mb-4 untuk margin bawah -->
            <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik']; ?>">
              <img class="img-fluid mb-2 w-75" src="admin/assets/images/cover/<?= $data['cover'] ?>" alt="" width="100%" height="10%">
              </a><br><br>
             <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik'];?>">
                <h4><?= $data['judul']; ?><br>
                <p><?= $data['nama_lengkap']?></p>
                </h4>
                <p><?= substr($data['deskripsi'], 0, 50); ?>...</p>
              </a>
              <br>
              
           
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

 