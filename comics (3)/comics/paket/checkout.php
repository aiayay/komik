


<?php



$getid = $_GET['id_paket'];

$search = mysqli_query($koneksi,"SELECT * FROM paket where id_paket ='$getid'");
$data = mysqli_fetch_array($search);

?>

<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Pembayaran</h2>
                    <h6 style="padding-top: 18px">Silahkan Upload Bukti Bayar</h6>
                    <br>
                    <h6>Paket Dipilih : <?= $data['nama_paket']; ?> (Rp.<?= $data['harga']; ?>)</h6>  
                      <div class="gaming-library profile-library">
                        <form action="paket/proses_checkout.php" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id_paketsaya" value="<?=$_GET['id_paket']?>">
                          <div class="col-lg-12">
                            
                            <?php
                                      if(!isset($_SESSION['id_user'])){
                                        echo "<script>
                                        alert('SILAHKAN LOGIN DULU');
                                        window.location.href='admin/login/index.php';
                                        </script>";
                                        }                         
                                          $user = mysqli_query($koneksi, "SELECT * FROM keranjang
                                                                  JOIN komik ON keranjang.id_komik=komik.id_komik
                                                                  JOIN paket ON keranjang.id_paket=paket.id_paket
                                                                  JOIN user ON keranjang.id_user=user.id_user
                                                                  ORDER BY id_keranjang DESC");

                                           while ($item = mysqli_fetch_array($user)):
                                ?>
                            
                            <div class="item row">
                              <div class="col-2">
                                <a href="?page=komik/detail_komik&id_komik=<?php echo $item['id_komik']; ?>">
                                  <img class="img-fluid" src="admin/assets/images/cover/<?= $item['cover'] ?>" alt="" width="100px" height="100px">
                                </a>
                              </div>
                              <div class="col-3">
                              <a href="?page=komik/detail_komik&id_komik=<?php echo $item['id_komik'];?>"><h4><?= $item['judul']; ?><br /><span><?= $item['nama_lengkap']?></span></h4></a>
                              </div>
                            </div>
                            <?php endwhile; ?>
                            <br>
                              <ul>
                                  <li>
                                  <h4>Upload Bukti Bayar</h4>
                                  <br>
                                  <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" required>
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

    
   


    