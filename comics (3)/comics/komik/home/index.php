
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
                      <!-- <img src="assets/images/profile.jpg" alt="" style="border-radius: 23px" /> -->
                    </div>
                    <div class="col-lg-10 align-self-center">
                      <div class="main-info header-text">
                        <!-- <span>Offline</span> -->
                        <h4>Daftar Komik</h4>
                        <p>Sudah siapkah kamu berkelana menjelajahi kebudayaan Indonesia melalui visual yang menggemaskan?
                        Mari nikmati keseruan koleksi komik kebudayaan EnchantIndo Comics, di mana dan kapan pun!</p>
                        <!-- <div class="main-border-button">
                          <a href="#">Start Live Stream</a>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-lg-4 align-self-center">
                      <!-- <ul>
                        <li>Games Downloaded <span>3</span></li>
                        <li>Friends Online <span>16</span></li>
                        <li>Live Streams <span>None</span></li>
                        <li>Clips <span>29</span></li>
                      </ul> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                    <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4><em>Komik</em> Pilihan</h4>
                  </div>
                  <div class="row">
                            <?php
                            $perpage = 3;
                            $page = isset($_GET["page"]) ? (int)$_GET["page"]: 1;
                            $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;
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
                          <?php
                          $nextKomik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC LIMIT 4");
                          $next = mysqli_fetch_array($nextKomik);
                          
                          // Ambil ID komik sebelumnya
                          $prevKomik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC LIMIT 4");
                          $back = mysqli_fetch_array($prevKomik);
                          ?>
                         <div class="col-lg-12 d-flex justify-content-between">
                        <?php if ($back) : ?>
                          <div class="main-button">
                            <a href="#">Back</a>
                          </div>
                        <?php endif; ?>
                        <?php if ($next) : ?>
                          <div class="main-button">
                            <a href="#">Next</a>
                          </div>
                        <?php endif; ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Banner End ***** -->

            <!-- ***** Gaming Library Start ***** -->
        <div class="gaming-library profile-library">
          <div class="col-lg-12">
            <div class="heading-section">
              <h4><em>Koleksi</em> Pilihan</h4>
            </div>
            <?php
            $komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC");
            while ($data = mysqli_fetch_array($komik)) :
            ?>
              <div class="item row">
                <div class="col-2">
                  <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik']; ?>">
                    <img class="img-fluid" src="admin/assets/images/cover/<?= $data['cover'] ?>" alt="" width="100px" height="100px">
                  </a>
                </div>
                <div class="col-3">
                <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik'];?>"><h4><?= $data['judul']; ?><br /><span><?= $data['nama_lengkap']?></span></h4></a>
                </div>
                <div class="col-7">
                  <p><?php echo $data['deskripsi']; ?></p>
                  <!-- <span>24/08/2036</span> -->
                </div>
                <?php if (isset($_SESSION['id_user'])) : ?>
                  <div class="col-12 mt-2">
                    <div class="main-border-button border-no-active">
                      <a href="?page=komik/baca/index">Baca</a>
                    </div>
                  </div>
                <?php else : ?>
                  <div class="col-12 mt-2">
                    <div class="main-border-button border-no-active">
                      <a href="?page=paket/home/index">Baca</a>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
<!-- ***** Gaming Library End ***** -->
</div>
</div>
</div>
</div>


