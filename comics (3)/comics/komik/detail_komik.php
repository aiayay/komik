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
        <div class="row">
          <div class="col-lg-12">
            <div class="main-profile">
              <div class="row">
                <div class="col-lg-4">
                  <!-- <img src="assets/images/profile.jpg" alt="" style="border-radius: 23px" /> -->
                </div>
                <div class="col-lg-10 align-self-center">
                  <div class="main-info header-text">
                    <h4>Koleksi Terbaru</h4>
                    <p>Sudah siapkah kamu berkelana menjelajahi kebudayaan Indonesia melalui visual yang menggemaskan? Mari nikmati keseruan koleksi komik kebudayaan EnchantIndo Comics, di mana dan kapan pun!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="clips">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="heading-section">
                          <h4><?= $item['judul']; ?><br /></h4>
                        </div>
                      </div>
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
            </div>
          </div>
        </div>
        <!-- ***** Banner End ***** -->
      </div>
    </div>
  </div>
</div>
