<?php
// Mendapatkan id_komik dari URL
$getid = $_GET['id_komik'];

// Mendapatkan id_gambar dari URL, jika ada
$getid_gambar = isset($_GET['id_gambar']) ? $_GET['id_gambar'] : null;

// Mengambil data komik berdasarkan id_komik
$search = mysqli_query($koneksi, "SELECT * FROM komik WHERE id_komik ='$getid'");
$item = mysqli_fetch_array($search);

// Mengambil gambar pertama dari komik jika id_gambar tidak ditentukan
if (!$getid_gambar) {
    $first_image = mysqli_query($koneksi, "SELECT * FROM tbgambar WHERE id_komik='$getid' ORDER BY id_gambar ASC LIMIT 1");
    $img = mysqli_fetch_array($first_image);
    $getid_gambar = $img['id_gambar'];
} else {
    $img_result = mysqli_query($koneksi, "SELECT * FROM tbgambar WHERE id_gambar='$getid_gambar' AND id_komik='$getid'");
    $img = mysqli_fetch_array($img_result);
}
?>

<!-- <div class="container">
  <div class="row">
    <div class="col-lg-12">
    <div class="most-popular">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="item">
                      <img class="img-fluid" src="admin/assets/images/komik/<?= $img['gambar_komik']?>" alt="" width="50%" height="auto">
                    </div>
                  </div>
                </div>

              
              </div>
      <div class="page-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-text">
              <h2 style="font-size: 36px"></h2>
              <p><?= $item['deskripsi']; ?></p>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

                    <!-- <div class="col-lg-12 d-flex justify-content-between">
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
                      </div> -->




    









  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                  <h2 style="font-size: 36px" class="text-center"><?= $item['judul']; ?></h2>
                    <h6 style="padding-top: 18px" class="text-center">Komik Kebudayaan EnchantIndo Comics</h6>
                  </div>
                </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="item">
                                            
                                        <img class="img-fluid" src="admin/assets/images/komik/<?= $img['gambar_komik']?>" alt="" width="100%" height="auto">
                                        </div>
                                    </div>
              </div>
            </div>
            <!-- ***** Banner End ***** -->
          </div>
        </div>
      </div>
    </div>


    
   