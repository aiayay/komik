<?php
$getid = $_GET['id_komik'];

// Ambil komik saat ini
$komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user WHERE id_komik = '$getid'");
$item = mysqli_fetch_array($komik);

// Ambil ID komik selanjutnya
$nextKomik = mysqli_query($koneksi, "SELECT id_komik FROM komik WHERE id_komik > '$getid' ORDER BY id_komik ASC LIMIT 1");
$next = mysqli_fetch_array($nextKomik);

// Ambil ID komik sebelumnya
$prevKomik = mysqli_query($koneksi, "SELECT id_komik FROM komik WHERE id_komik < '$getid' ORDER BY id_komik DESC LIMIT 1");
$back = mysqli_fetch_array($prevKomik);
?>

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
                  <div class="heading-section">
                      <h4 class="text-center"><?= $item['judul']; ?><br /></h4>
                  </div>
                  <div class="row">
                    
                  <div class="col-lg-12">
                        <div class="item d-flex border p-3">
                          <div class="col-lg-3 col-sm-6">
                            <a href="?page=komik/detail_komik&id_komik=<?php echo $item['id_komik']; ?>">
                              <img class="img-fluid" src="admin/assets/images/cover/<?= $item['cover']?>" alt="" width="100px" height="100px">
                            </a>
                          </div>
                          <div class="col-lg-9 col-sm-6" style="margin-left: 15px;">
                            <h4><?= $item['deskripsi']; ?><br /></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-between">
                        <?php if ($back) : ?>
                          <div class="main-button">
                            <a href="?page=komik/detail_komik&id_komik=<?= $back['id_komik']; ?>">Back</a>
                          </div>
                        <?php endif; ?>
                        <?php if ($next) : ?>
                          <div class="main-button">
                            <a href="?page=komik/detail_komik&id_komik=<?= $next['id_komik']; ?>">Next</a>
                          </div>
                        <?php endif; ?>
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

    