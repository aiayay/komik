
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Pembayaran</h2>
                      <h6 style="padding-top: 18px"><a href="?page=user/tambah">Silahkan Upload Bukti Bayar</a></h6>
                  
                        <div class="gaming-library profile-library">
                          <form action="keranjang/proses_checkout.php" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12">
                              <div class="item">
                                <ul>
                                    <?php
                                          if(!isset($_SESSION['id_user'])){
                                            echo "<script>
                                            alert('SILAHKAN LOGIN DULU');
                                            window.location.href='admin/login/index.php';
                                            </script>";
                                            }
                                                                      
                                      $user = mysqli_query($koneksi, "SELECT * FROM keranjang
                                                                JOIN komik ON keranjang.id_komik=komik.id_komik
                                                                JOIN user ON keranjang.id_user=user.id_user
                                                                JOIN paket ON keranjang.id_paket=paket.id_paket
                                                                WHERE user.id_user='$_SESSION[id_user]'
                                                                ORDER BY id_keranjang DESC");

                                      while ($item = mysqli_fetch_array($user)):
                                    ?>
                                  <li><img src="../admin/assets/images/cover/<?= $item['cover']?>" alt="" width="100px" height="100px" class="templatemo-item" /></li>
                                  <li>
                                    <h4><?= $item['judul']?></h4>
                                    <span><?= $item['kuantitas']?></span>
                                  </li>
                                  <?php endwhile; ?>
                                </ul>
                            
                              </div>
                            <br>
                                <ul>
                                  <li>
                                  <h4>Upload Bukti Bayar</h4>
                                  <br>
                                  <input type="file" class="form-control" name="bukti_bayar">                   
                                  </li>
                                </ul>
                          </div>
                    <br><br>
              <div class="col-lg-12">
                                      <div class="main-button">
                                        <button type="submit">lanjut Pembayaran</button>
                                      </div>
                                    </div>
            </form>
            </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** Gaming Library Start ***** -->
 
    <!-- ***** Gaming Library End ***** -->

    
 